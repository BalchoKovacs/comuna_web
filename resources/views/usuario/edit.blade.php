@extends('layouts.app')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Usuario</h1>
      </div>
    </div>
  </div>
</section>
<section class="content">
 <div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Actualizar Usuario</h3>

    </div>

    <div class="card-body">
     {!! Form::model($data, ['route' => ['user.update', $data->id], 'method' => 'patch']) !!}
     <div class="row">
     


<div class="form-group col-sm-6">
    {!! Form::label('dni', 'DNI:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control decimal','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Correo:') !!}
    {!! Form::text('email', null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', ['class' => 'form-control ']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-dark']) !!}
    <a href="{{ route('user.index') }}" class="btn btn-default">Cancelar</a>
</div>

    </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</section>
@endsection
