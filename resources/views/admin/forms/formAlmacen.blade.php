<div class="col-md-6">
    <div class="form-group">
        {!!Form::label('Código de barras:')!!}
        {!!Form::text('id',null,['class'=>'form-control soloNum','placeholder'=>'Ingresa el código de barras'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Nombre del producto:')!!}
        {!!Form::text('nomProd',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del producto'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('Unidades:')!!}
        {!!Form::text('uniProd',null,['class'=>'form-control soloNum','placeholder'=>'Ingresa el número de unidades'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('Precio:')!!}
        {!!Form::text('precioProd',null,['class'=>'form-control soloNum',
         'placeholder'=>'Ingresa el precio del producto'])!!}
    </div>

</div>
<div class="col-md-6">

    <div class="form-group">
        {!!Form::label('IVA:')!!}
        {!!Form::text('ivaProd',null,['class'=>'form-control soloNum','placeholder'=>'Ingresa el IVA del producto'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('Código manual:')!!}
        {!!Form::text('idMProd',null,['class'=>'form-control soloNum','placeholder'=>'Ingresa el código manual'])!!}
    </div>
    <div class="form-group">
        {!! Form::select('favProd', array('pan' => 'Pan', 'bolleria' => 'Bolleria','bebida' =>'Bebida','varios' => 'Varios'),
         null, ['class'=>'form-control', 'placeholder' => '']) !!}
    </div>
</div>
