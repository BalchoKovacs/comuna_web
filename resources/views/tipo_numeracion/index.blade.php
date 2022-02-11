@extends('layouts.app')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tipo Numeracion</h1>
    </div>
    <div class="col-sm-6 text-right">
     <a class="btn btn-dark" href="{{ route('tipo_numeracion.create') }}">Agregar Nuevo Tipo Numeracion</a>
 </div>
</div>
</div>
</section>

<section class="content">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabla de Tipo de Numeracion</h3>
                </div>
                @include('sweetalert::alert')

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="text-center table table-striped table-bordered dt-responsive nowrap" id="example">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>NUMERACION</th>
                                    <th class="no-export">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                             @foreach($data as $key=>$nombre)
                                    <tr>
                                    <td> {{$key+1}}</td>
                                    <td>{{ $nombre->nombre }}</td>


                                    <td>
                                        {!! Form::open(['route' => ['tipo_numeracion.destroy', $nombre->id], 'method' => 'delete']) !!}

                                            <a href="{{ route('tipo_numeracion.edit', [$nombre->id]) }}" class='btn btn-success '><i class="fas fa-edit"></i></a>
                                            
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





