@extends('layouts.main')

@section('content')

    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    <h1>Prueba gitHub</h1>
    <div class="container text-center">
        <h1>ADMINISTRAR</h1>
        <div class="padding-top-50">
            <div class="row">
                <div class="col-xs-12 col-md-6 text-center animated fadeInLeft">
                    <span class="oi oi-box icon-lg"></span>
                    <a href="{!! URL::to('admin/almacen') !!}" class="btn btn-primary btn-lg btn-block">Almacén</a>
                </div>
                <div class="col-xs-12 col-md-6 text-center animated fadeInRight">
                    <span class="oi oi-person icon-lg"></span>
                    <a href="#" class="btn btn-primary btn-lg btn-block">Proveedores</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-5 espacio-arriba animated fadeInUp">
                    <a href="{!! URL::to('admin/listado') !!}" class="btn btn-default">
                        <span class="glyphicon glyphicon-user"></span> Administrar cuenta</a>
                </div>
            </div>

        </div>
    </div>
@stop