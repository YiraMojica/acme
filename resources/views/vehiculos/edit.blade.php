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
                   {!! Form::model($vehiculo, ['route' => ['vehiculos.update', $vehiculo->id], 'method' => 'patch']) !!}

                        @include('vehiculos.fields')

                   {!! Form::close() !!}
                 </div>
               </div>
           </div>
@endsection
