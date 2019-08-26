@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vehiculo
        </h1>
    </section>
    <div class="m-content">
        @include('adminlte-templates::common.errors')
        <div class="row">
          <div class="col-md-12">
            {!! Form::open(['route' => 'vehiculos.store','class' => 'm-form m-form--fit m-form--label-align-right']) !!}

                @include('vehiculos.fields')

            {!! Form::close() !!}
          </div>
        </div>
    </div>
@endsection
