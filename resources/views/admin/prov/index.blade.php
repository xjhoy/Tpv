@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked">

                <h4 class="text-center">Menú</h4>
                <li role="presentation"><a href="{!! URL::to('admin') !!}">
                        <span class="glyphicon glyphicon-hdd"></span> Administrar</a></li>
                <li role="presentation"><a href="{!! URL::to('admin/almacen') !!}">
                        <span class="oi oi-box"></span> Almacén</a></li>
                <li role="presentation" class="active"><a href="{!! URL::to('admin/prov') !!}">
                        <span class="oi oi-people"></span> Proveedores</a></li>

            </ul>
        </div>
        <div class="col-md-10">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{Session::get('message')}}
                </div>

            @endif
            <div class="row">
                <div class="col-md-5 center-block quitar-float text-center">
                    <a href="{!! URL::to('admin/proveedores/create') !!}" class="btn btn-success btn-lg">
                        <span class="glyphicon glyphicon-plus"></span> Crear proveedor</a>
                </div>
            </div>
            <br>
            <table class="table table-bordered table-hover">
                <thead >
                <th class="info">CIF</th>
                <th class="info">Nombre de contacto</th>
                <th class="info">Razon social</th>
                <th class="info">Teléfono</th>
                <th class="info">Provincia</th>
                <th class="info">Localidad</th>
                <th class="info">Dirección</th>
                <th class="info">CP</th>
                <th class="info">Email</th>
                <th class="info">Operación</th>
                </thead>
                    @foreach($provs as $prov)
                    <tbody>
                    <td>{{$prov->id}}</td>
                    <td>{{$prov->nomContacto}}</td>
                    <td>{{$prov->razonSocial}}</td>
                    <td>{{$prov->telfProv}}</td>
                    <td>{{$prov->provProv}}</td>
                    <td>{{$prov->locProv}}</td>
                    <td>{{$prov->dirProv}}</td>
                    <td>{{$prov->cpProv}}</td>
                    <td>{{$prov->emailProv}}</td>
                    <td>
                        {!!link_to_route('admin.proveedores.edit', $title = 'Editar', $parameters = $prov -> id,
                        $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                    </tbody>
                    @endforeach
            </table>

        </div>
    </div>

@stop
