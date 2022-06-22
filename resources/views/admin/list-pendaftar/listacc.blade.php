@extends('adminlte::page')

@section('title', 'Verifikasi')

@section('content_header')
    <p></p>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Berkas</h3>
                        </div>

                        <div class="card-body p-0 table-responsive">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Nama Lengkap
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th colspan="2">
                                            Opsi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userdetail as $ud => $l)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration + $userdetail -> firstItem() - 1}}                                            </td>
                                            <td>
                                                {{ $l->email }}
                                            </td>
                                            <td>
                                                {{ $l->namalengkap }}
                                            </td>
                                            <td>

                                                <p>{{ $l->status }}</p>

                                            </td>
                                            <td>
                                                <a type="button" id="download-{{ $l->id }}"
                                                    class="btn btn-primary btn-sm" href="{{ route('download', $l->id) }}"
                                                    download="{{ $l->file }}">
                                                    <i class="fa-solid fa-download"></i>
                                                    <span>Download</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @foreach ($userdetail as $ud => $l)
                                <div class="modal fade" id="modal-xl-{{ $l->id }}">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Data {{ $l->namalengkap }}</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="modal-body">
                                                        <div class="card-body p-0 table-responsive">
                                                            <div class="card-body p-0">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <center>NISN</center>
                                                                            </th>
                                                                            <th>
                                                                                <center>Tanggal Lahir</center>
                                                                            </th>
                                                                            <th>
                                                                                <center>Akun Instagram</center>
                                                                            </th>
                                                                            <th>
                                                                                <center>Posisi Bermain</center>
                                                                            </th>
                                                                            <th>
                                                                                <center>Riwayat SSB</center>
                                                                            </th>
                                                                            <th>
                                                                                <center>Prestasi</center>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <center>{{ $l->nisn }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->ttl }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->akunig }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->posisibermain }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->riwayatssb }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->prestasi }}</center>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="modal-body">
                                                        <div class="card-body p-0 table-responsive">
                                                            <div class="card-body p-0">
                                                                <table class="table table-striped" align="center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <center>Tinggi Badan</center>
                                                                            </th>
                                                                            <th>
                                                                                <center>Berat Badan</center>
                                                                            </th>
                                                                            <th>
                                                                                <center>Nama Orangtua</center>
                                                                            </th>
                                                                            <th>
                                                                                <center>Pekerjaan Orangtua</center>
                                                                            </th>
                                                                            <th>
                                                                                <center>Mengetahui SSB Petrogres dari
                                                                                </center>
                                                                            </th>
                                                                            <th>
                                                                                <center>No HP/Whatsapp</center>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <center>{{ $l->ttl }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->akunig }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->nohp }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->posisibermain }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->riwayatssb }}</center>
                                                                            </td>
                                                                            <td>
                                                                                <center>{{ $l->nohp }}</center>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                {{ $userdetail->links() }}
            </div>
        </div>
        </div>
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
            //download
            @foreach ($userdetail as $l)
                $(document).ready(function() {
                $("#download-{{ $l->id }}").click(function() {
                Swal.fire(
                'Berkas didownload',
                'Segera verifikasi',
                'success'
                )
                });
                });
            @endforeach
            //acc
            @foreach ($userdetail as $l)
                $(document).ready(function() {
                $("#check-{{ $l->id }}").click(function() {
                Swal.fire({
                title: 'Verifikasi',
                text: "Apakah berkas sudah diverifikasi?",
                icon: 'question',
                showCancelButton: true,
                cancelButtonText: 'Belum',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, sudah diverifikasi'
                }).then((result) => {
                if (result.isConfirmed) {
                Swal.fire(
                'Sukses!',
                'Berkas sudah diverifikasi.',
                'success'
                ).then(function(){
                window.location = '{{ route('verifikasi.save', $l->id) }}'
                });
                }
                })
                });
                });
            @endforeach
            //decc
            @foreach ($userdetail as $l)
                $(document).ready(function() {
                $("#cross-{{ $l->id }}").click(function() {
                Swal.fire({
                title: 'Tolak',
                text: "Apakah ingin menolak berkas?",
                icon: 'question',
                showCancelButton: true,
                cancelButtonText: 'Tidak',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
                }).then((result) => {
                if (result.isConfirmed) {
                Swal.fire(
                'Sukses!',
                'Berkas ditolak.',
                'success'
                ).then(function(){
                window.location = '{{ route('verifikasi.tolak', $l->id) }}'
                });
                }
                })
                });
                });
            @endforeach
        </script>
    @stop
