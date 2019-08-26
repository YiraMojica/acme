@extends('layouts.app')

@section('content')
    <div class="content">
      @include('vehiculos.show_fields')
      <a href="{!! route('vehiculos.index') !!}" class="btn btn-success m-btn--wide">Regresar</a>
    </div>
@endsection
