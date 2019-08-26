@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Users
        </h1>
   </section>
  <div class="m-content">
       @include('adminlte-templates::common.errors')
       <div class="row">
         <div class="col-md-12">
                   {!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch']) !!}

                        @include('users.fields2')

                   {!! Form::close() !!}
           </div>
       </div>
     </div>
@endsection
