@extends('adminlte::page')

@section('title', 'Verifikasi')

@section('content_header')
    <p></p>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Rekening</h3>
                        <div class="card-tools">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nomor Rekening</th>
                                    <th colspan="2">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rek as $re => $r)
                                    <tr>
                                        <td>
                                            {{ ++$re }}
                                        </td>
                                        <td>
                                            {{ $r->name }}
                                        </td>
                                        <td>
                                            {{ $r->rekening }}
                                        </td>
                                        <td>
                                            <a type="button" href="#" id="check-{{ $r->id }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Rekening Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="{{ Route('rekening.save') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Nama</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="name" class="form-control" id="inputEmail3"
                                            placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-5 col-form-label">Nomor Rekening</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="rekening" class="form-control" id="inputPassword3"
                                            placeholder="Nomor Rekening" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>

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
            @foreach ($rek as $l)
                $(document).ready(function() {
                    $("#check-{{ $l->id }}").click(function() {
                        Swal.fire({
                            title: 'Hapus',
                            text: "Apakah ingin menghapus nomor {{ $l->rekening }}?",
                            icon: 'question',
                            showCancelButton: true,
                            cancelButtonText: 'Tidak',
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Ya'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Sukses!',
                                    'Nomor rekening sudah dihapus.',
                                    'success'
                                ).then(function() {
                                    window.location = '{{ route('rekening.delete', $l->id) }}'
                                });
                            }
                        })
                    });
                });
            @endforeach
        </script>
    @stop
