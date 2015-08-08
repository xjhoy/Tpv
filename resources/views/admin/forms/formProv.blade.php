<div class="col-md-6">
    <div class="form-group">
            {!!Form::label('CIF:')!!}
        {!!Form::text('id',null,['class'=>'form-control','placeholder'=>'Ingresa el CIF'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Nombre de contacto:')!!}
        {!!Form::text('nomContacto',null,['class'=>'form-control','placeholder'=>'Ingresa nombre de contacto'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('Razón social:')!!}
        {!!Form::text('razonSocial',null,['class'=>'form-control','placeholder'=>'Ingresa razón social'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('Teléfono:')!!}
        {!!Form::text('telfProv',null,['class'=>'form-control soloNum','placeholder'=>'Ingresa teléfono'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Provincia:')!!}
        {!!Form::text('provProv',null,['class'=>'form-control','placeholder'=>'Ingresa provincia'])!!}
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        {!!Form::label('Localidad:')!!}
        {!!Form::text('locProv',null,['class'=>'form-control','placeholder'=>'Ingresa la localidad'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Dirección:')!!}
        {!!Form::text('dirProv',null,['class'=>'form-control','placeholder'=>'Ingresa la dirección'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Código postal:')!!}
        {!!Form::text('cpProv',null,['class'=>'form-control soloNum','placeholder'=>'Ingresa el código postal'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Email:')!!}
        {!!Form::text('emailProv',null,['class'=>'form-control','placeholder'=>'Ingresa el email'])!!}
    </div>
</div>