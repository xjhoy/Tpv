@extends('layouts.main')

@section('content')
    @include('alerts.request')
    <div class="col-md-8 col-md-offset-2">
        {!!Form::model($prov,['route'=>['admin.prov.update',$prov->id],'method'=>'PUT'])!!}
        @include('admin.forms.formProv')
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {!!Form::submit('Actualizar',['class'=>'btn btn-primary btn-block'])!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@stop
@section('js')
    @include('admin.forms.scrypts')
@stop