


<div class="form-group col-sm-12">
    {!! Form::label('nombre', 'Disponibilidad:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-dark']) !!}
    <a href="{{ route('tipo_disponibilidad.index') }}" class="btn btn-default">Cancelar</a>
</div>
