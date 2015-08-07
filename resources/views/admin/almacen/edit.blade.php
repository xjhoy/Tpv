@extends('layouts.main')

@section('content')
    @include('alerts.request')
    <div class="col-md-8 col-md-offset-2">
        {!!Form::model($almacen,['route'=>['admin.almacen.update',$almacen->id],'method'=>'PUT'])!!}
        @include('admin.forms.formAlmacen')
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {!!Form::submit('Registrar',['class'=>'btn btn-primary btn-block'])!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@stop
@section('js')
    @include('admin.forms.scrypts')
@stop