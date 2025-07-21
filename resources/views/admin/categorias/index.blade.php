@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 16px">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-info" href="{{url('admin')}}">Inicio</a></li>
            <li class="breadcrumb-item"><a class="text-info" href="{{url('admin/categorias')}}">Categorías</a></li>
            <li class="breadcrumb-item active" aria-current="page">Listado de Categorías</li>
        </ol>
    </nav>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Categorías registradas</h3>
                    
                    <div class="card-tools">
                        <a class="btn btn-info" href="{{ url('/admin/categorias/create') }}"> Crear categoría</a>
                    </div><!-- /.card-tools -->
                </div><!-- /.card-header -->

                <div class="card-body" style="display: block;">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->id }}</td>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>{{ $categoria->descripcion }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
        </div><!-- /.col-md-6 -->

        <div class="col-md-3"></div>
    </div><!-- /.row -->
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
