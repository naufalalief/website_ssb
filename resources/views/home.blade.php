@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <p></p>
@stop

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @role('user')

        @include('user.dashboard')

    @endrole

    @role('admin')

        @include('admin.dashboard')

    @endrole
    
    @guest()
        {{ __('You are not logged in!') }}
    @endguest
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
