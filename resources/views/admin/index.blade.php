@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Panel Administrador</h1>
@stop

@section('content')
    <p>Bienvenido Administrador</p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
