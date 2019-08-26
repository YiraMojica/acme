@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuarios
        </h1>
    </section>
    <div class="m-content">
        @include('adminlte-templates::common.errors')
        <div class="row">
          <div class="col-md-12">
                    {!! Form::open(['route' => 'users.store']) !!}

                        @include('users.fields')

                    {!! Form::close() !!}
              </div>
            </div>
        </div>
@endsection
