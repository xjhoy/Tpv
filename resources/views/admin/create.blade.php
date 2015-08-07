@extends('layouts.main')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    @include('alerts.request')
    <div class="col-md-4 center-block quitar-float animated fadeInUp">
        {!!Form::model($user,['route' => ['admin/conf.update',$user -> name],'method'=>'PUT'])!!}

        @include('admin.forms.usr')

        {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}

    </div>
@stop
