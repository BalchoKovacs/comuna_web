@extends('layouts.app')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>TIPO DE NUMERACION</h1>
      </div>
    </div>
  </div>
</section>
<section class="content">
 <div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Actualizar Tipo Numeracion</h3>

    </div>

    <div class="card-body">
     {!! Form::model($data, ['route' => ['tipo_numeracion.update', $data->id], 'method' => 'patch']) !!}
     <div class="row">
     
       @include('tipo_numeracion.fields')

    </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</section>
@endsection
