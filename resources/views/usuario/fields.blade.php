

<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_documento', 'TIPO DE DOCUMENTO:') !!}
    {!! Form::select('id_tipo_documento',$tipo_documento, null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('nro_documento', 'NUMERO DE DOCUMENTO:') !!}
    {!! Form::text('nro_documento', null, ['class' => 'form-control decimal','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_documento', 'ROL:') !!}
    {!! Form::select('id_tipo_documento',$tipo_rol, null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'NOMBRES:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'APELLIDOS:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'TELEFONO:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'complejo:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'PAIS:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'ESTADO:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'UNIDADES:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'TIPO DE NUMERACION:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'DEPARTAMENTO:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'FOTO:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('email', 'CORREO:') !!}
    {!! Form::text('email', null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('password', 'CONTRASEÑA:') !!}
    {!! Form::password('password', ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('password', 'CONFIRMAR CONTRASEÑA:') !!}
    {!! Form::password('password', ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-dark']) !!}
    <a href="{{ route('user.index') }}" class="btn btn-default">Cancelar</a>
</div>
