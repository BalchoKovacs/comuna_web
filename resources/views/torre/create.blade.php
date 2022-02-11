@extends('layouts.app')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Creacion de Torre</h1>
    </div>
</div>
</div>
</section>
<section class="content">

    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-body">
                {!! Form::open(['route' => 'torre.store']) !!}
                <div class="row">
                    @include('torre.fields')
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@endsection

