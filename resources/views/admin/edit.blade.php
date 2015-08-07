@extends('layouts.main')

@section('content')
    @include('alerts.request')
    <div class="col-md-4 center-block quitar-float">
        {!!Form::model($user,['route'=>['admin.update',$user->id],'method'=>'PUT'])!!}
        @include('admin.forms.usr')
        {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
    </div>
@stop