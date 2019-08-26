<!-- Placa Field -->

<div class="row">
  <div class="col-md-6">
    <div class="m-portlet__body">
      <div class="form-group m-form__group">
        {!! Form::label('placa', 'Placa:') !!}
        {!! Form::text('placa', null, ['class' => 'form-control m-input','required'=>'required','maxlength'=>'6']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="m-portlet__body">
      <div class="form-group m-form__group">
        {!! Form::label('color', 'Color:') !!}
        {!! Form::text('color', null, ['class' => 'form-control m-input','required'=>'required']) !!}
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="m-portlet__body">
      <div class="form-group m-form__group">
        {!! Form::label('id_marca', 'Marca:') !!}
         {!! Form::select('id_marca',$marcas,null, ['class' => 'form-control m-input','required'=>'required']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="m-portlet__body">
      <div class="form-group m-form__group">
        {!! Form::label('tipo_vehiculo', 'Tipo Vehiculo:') !!}
       {!! Form::select('tipo_vehiculo',['1'=>'Particular','2'=>'Publico'],null, ['class' => 'form-control m-input','required'=>'required']) !!}
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="m-portlet__body">
      <div class="form-group m-form__group">
        {!! Form::label('id_propietario', 'Propietario:') !!}
        {!! Form::select('id_propietario',$usuarios,null, ['class' => 'form-control m-input','required'=>'required']) !!}
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="m-portlet__body">
      <div class="form-group m-form__group">
        {!! Form::label('id_conductor', 'Conductor:') !!}
        {!! Form::select('id_conductor',$usuarios,null, ['class' => 'form-control m-input']) !!}
      </div>
    </div>
  </div>
</div><br><br>
<div class="m-portlet__body">
  <div class="form-group m-form__group" >
    {!! Form::submit('Guardar', ['class' => 'btn m-btn--square  btn-primary']) !!}
    <a href="{!! route('vehiculos.index') !!}" class="btn btn-default">Cancelar</a>
  </div>
</div>
