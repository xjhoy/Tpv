<!--

* Created by PhpStorm.
* User: Jhoseph Arango
* Date: 02/08/2015
* Time: 20:14

-->
@extends('layouts.main')

@section('content')

    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>

    @endif
    <div class="row">
        <div class="col-md-5 center-block quitar-float text-center">
            <a href="{!! URL::to('admin/almacen/create') !!}" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-plus"></span> Crear producto</a>
        </div>
    </div>
    <br>
    <table class="table table-bordered table-hover">
        <thead >
        <th class="info">Código de barras</th>
        <th class="info">Descripcion</th>
        <th class="info">Unidades</th>
        <th class="info">Precio</th>
        <th class="info">IVA</th>
        <th class="info">Neto</th>
        <th class="info">Favorito</th>
        <th class="info">Codigo manual</th>
        <th class="info">Operación</th>
        </thead>
        @foreach($almacens as $almacen)
            <tbody>
            <td>{{$almacen->id}}</td>
            <td>{{$almacen->nomProd}}</td>
            <td>{{$almacen->uniProd}}</td>
            <td>{{$almacen->precioProd}}</td>
            <td>{{$almacen->ivaProd}}</td>
            <td>{{$almacen->netoProd}}</td>
            <td>{{$almacen->favProd}}</td>
            <td>{{$almacen->idMProd}}</td>
            <td>
                {!!link_to_route('admin.almacen.edit', $title = 'Editar', $parameters = $almacen -> id,
                $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
    {!!$almacens->render()!!}

    <script>

    </script>
@stop
