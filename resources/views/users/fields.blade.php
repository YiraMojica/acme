<div class="row">
    <div class="col-md-4">
      <div class="m-portlet__body">
        <div class="form-group m-form__group">
          {!! Form::label('cedula', 'Identificacion:') !!}
          {!! Form::text('cedula', null, ['class' => 'form-control','required'=>'required','type'=>'number']) !!}
        </div>
      </div>
      </div>
      <div class="col-md-4">
      <div class="m-portlet__body">
        <div class="form-group m-form__group">
          {!! Form::label('name', 'Pirmer Nombre:') !!}
          {!! Form::text('name', null, ['class' => 'form-control','required'=>'required']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-4">
    <div class="m-portlet__body">
      <div class="form-group m-form__group">
        {!! Form::label('segundo_nombre', 'Segundo Nombre:') !!}
        {!! Form::text('segundo_nombre', null, ['class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  </div>
  <div class="row">
      <div class="col-md-6">
        <div class="m-portlet__body">
          <div class="form-group m-form__group">
            {!! Form::label('apellidos', 'Apellidos:') !!}
            {!! Form::text('apellidos', null, ['class' => 'form-control','required'=>'required']) !!}
          </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="m-portlet__body">
          <div class="form-group m-form__group">
            {!! Form::label('direccion', 'Direccion:') !!}
            {!! Form::text('direccion', null, ['class' => 'form-control','required'=>'required']) !!}
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-6">
          <div class="m-portlet__body">
            <div class="form-group m-form__group">
              {!! Form::label('telefono', 'Telefono:') !!}
              {!! Form::text('telefono', null, ['class' => 'form-control','required'=>'required']) !!}
            </div>
          </div>
          </div>
          <div class="col-md-6">
          <div class="m-portlet__body">
            <div class="form-group m-form__group">
              {!! Form::label('email', 'Email:') !!}
              {!! Form::email('email', null, ['class' => 'form-control','required'=>'required','type'=>'email']) !!}
            </div>
          </div>
        </div>
      </div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn m-btn--square  btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Regresar</a>
</div>
