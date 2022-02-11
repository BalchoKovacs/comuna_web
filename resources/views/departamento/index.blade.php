@extends('layouts.app')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Departamento</h1>
    </div>
    <div class="col-sm-12 text-right">
     
     <a class="btn btn-dark" style="margin: 5px" href="{{ route('departamento.create') }}">Agregar Nuevo Departamento</a>
 </div>
</div>
</div>
</section>

<section class="content">

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Tabla de Departamentos</h3>
                </div>
                <div class="col-sm-12 text-right">
     
                @include('sweetalert::alert')

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="text-center table table-striped table-bordered dt-responsive nowrap" id="example">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>TIPO DEPARTAMENTO</th>
                                    <th>TIPO NUMERACION</th>
                                    <th>TORRE</th>
                                    <th>NUMERO</th>
                                    <th class="no-export">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                             @foreach($data as $key=>$departamento)
                                    <tr>
                                    <td> {{$key+1}}</td>
                                    <td>{{ $departamento->tipo_departamento->nombre }} </td>
                                    <td>{{ $departamento->numeracion->nombre }}</td>
                                    <td>{{ $departamento->torre->nombre }}</td>
                                    <td>{{ $departamento->numero }}</td>
                                   


                                    <td>
                                        {!! Form::open(['route' => ['departamento.destroy', $departamento->id], 'method' => 'delete']) !!}

                                            <a href="{{ route('departamento.edit', [$departamento->id]) }}" class='btn btn-success '><i class="fas fa-edit"></i></a>
                                            
                                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro de eliminar este registro?')"]) !!}

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection





