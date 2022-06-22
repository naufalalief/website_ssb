@extends('adminlte::page')

@section('title', 'Verifikasi')

@section('content_header')
    <p></p>
@stop

@section('content')
    <style>
        .rad {
            font-weight: normal !important;
        }
    </style>

    @role('user')
        {{-- status pembayaran --}}
        @if (App\Http\Controllers\HomeController::payment_status('Bukti pembayaran telah diverifikasi'))
            <script type="text/javascript">
                document.getElementById('divId').style.display = 'none';
            </script>
            @include('user.message.Pstatus')
        @elseif (App\Http\Controllers\HomeController::payment_status('belum diverifikasi'))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/javascript">
                Swal.fire({
                    title: 'Peringatan!',
                    text: 'Bukti pembayaran belum diverifikasi, silahkan tunggu!',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then(function() {
                    window.location = '{{ route('home') }}'
                });
                document.getElementById('divId').style.display = 'none';
            </script>
            {{-- end --}}
            {{-- status pendaftar --}}
        @elseif (App\Http\Controllers\HomeController::status('belum diverifikasi'))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/javascript">
                Swal.fire({
                    title: 'Peringatan!',
                    text: 'Berkas belum diverifikasi, silahkan tunggu!',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then(function() {
                    window.location = '{{ route('home') }}'
                });
                document.getElementById('divId').style.display = 'none';
            </script>
        @elseif (App\Http\Controllers\HomeController::status('Berkas pendaftar ditolak'))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/javascript">
                Swal.fire({
                    title: 'Peringatan!',
                    text: 'Berkas pendaftar ditolak, silahkan upload lagi!',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then(function() {
                    window.location = '{{ route('home') }}'
                });
                document.getElementById('divId').style.display = 'none';
            </script>
        @elseif (App\Http\Controllers\HomeController::status('Belum Upload'))
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/javascript">
                Swal.fire({
                    title: 'Peringatan!',
                    text: 'Berkas belum diupload, silahkan upload berkas terlebih dahulu!',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then(function() {
                    window.location = '{{ route('home') }}'
                });
                document.getElementById('divId').style.display = 'none';
            </script>
            {{-- end --}}
        @else
            @include('user.formpayment')
        @endif
    @endrole
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        console.log('Hi!');

        //Custom file
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@stop
