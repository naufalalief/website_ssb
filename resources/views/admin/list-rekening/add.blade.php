@extends('adminlte::page')

@section('title', 'Verifikasi')

@section('content_header')
    <p></p>
@stop

@section('content')
    <section class="content">
        <div class="container" id="divId">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Tambah Rekening</h3>
                </div>


                <form class="form-horizontal" action="{{ Route('rekening.save') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Rekening</label>
                            <div class="col-sm-10">
                                <input type="text" name="rekening" class="form-control" id="inputPassword3"
                                    placeholder="Nomor Rekening" required>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Tambah</button>
                    </div>
                </form>
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
        </script>
    @stop
