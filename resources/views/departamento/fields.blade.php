
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_departamento', 'TIPO DE DEPARTAMENTO:') !!}
    {!! Form::select('id_tipo_departamento',$tipo_departamento, null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('id_torre', 'TORRE:') !!}
    {!! Form::select('id_torre',$torre, null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_numeracion', 'TIPO DE NUMERACION:') !!}
    {!! Form::select('id_tipo_numeracion',$tipo_numeracion, null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'NUMERO:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12" style="margin: 5px">
    {!! Form::submit('Guardar', ['class' => 'btn btn-dark']) !!}
    <a href="{{ route('departamento.index') }}" class="btn btn-default">Cancelar</a>
</div>

