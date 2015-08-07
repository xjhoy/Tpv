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
                <li role="presentation"><a href="{!! URL::to('admin/prov') !!}">
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
            <table class="table table-bordered table-hover">
                <thead >
                <th class="info">Nombre</th>
                <th class="info">Operación</th>
                </thead>
                @foreach($users as $user)
                    <tbody>
                    <td>{{$user->name}}</td>
                    <td>{!!link_to_route('admin.edit', $title = 'Editar', $parameters = $user -> id,
                $attributes = ['class'=>'btn btn-primary'])!!}</td>
                    </tbody>
                @endforeach
            </table>
            {!!$users->render()!!}
        </div>
    </div>

@stop
