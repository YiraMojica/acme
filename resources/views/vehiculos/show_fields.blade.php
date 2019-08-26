
<div class="row">
  <div class="col-md-12">
    <div class="m-subheader ">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="m-subheader__title m-subheader__title--separator">
							Detalles
						</h3>
						<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
							<li class="m-nav__item m-nav__item--home">
								<a href="#" class="m-nav__link m-nav__link--icon">
									<i class="m-nav__link-icon la la-home"></i>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										vehiculos
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										información
									</span>
								</a>
							</li>
						</ul>
					</div>
					<div style="font-size: 17px;">
						<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
							<span class="m-subheader__daterange-label">
								<span class="m-subheader__daterange-title"><b>Codigo:</b></span>
								<span class="m-subheader__daterange-date m--font-brand">ACME-{{$vehiculo->id}}</span>
							</span>
						</span>
					</div>
				</div>
			</div>
      <div class="m-widget12 m-widget12--chart-bottom m--margin-top-10" style="min-height: 450px">
				<div class="m-widget12__item">
					<span class="m-widget12__text1">
              <b>{!! Form::label('placa', 'Placa:') !!}</b>
						 {!! $vehiculo->placa !!}
					</span>
					<span class="m-widget12__text2">
            <b>{!! Form::label('color', 'Color:') !!}</b>
           {!! $vehiculo->color !!}
					</span>
				</div>
				<div class="m-widget12__item">
          <span class="m-widget12__text1">
              <b>{!! Form::label('id_marca', 'Marca:') !!}</b>
            {!! $vehiculo->marca->nombre !!}
          </span>
          <span class="m-widget12__text2">
            <b>{!! Form::label('tipo_vehiculo', 'Tipo Vehiculo:') !!}</b>
           @if($vehiculo->tipo_vehiculo==1) Particular @else Publico @endif
          </span>
        </div>
        <div class="m-widget12__item">
          <span class="m-widget12__text1">
            <b>   {!! Form::label('created_at', 'Fecha Creación:') !!}</b>
           {!! $vehiculo->created_at !!}
          </span>
          <span class="m-widget12__text2">
            <b>Identificacion Propietario:</b>
           {!! $vehiculo->propietario->cedula !!}
          </span>
        </div>
        <div class="m-widget12__item">
          <span class="m-widget12__text1">
            <b> Nombre Propietario: </b>
           {!! $vehiculo->propietario->name !!}  {{$vehiculo->propietario->segundo_nombre }}  {{$vehiculo->propietario->apellidos }}
          </span>
          <span class="m-widget12__text2">
            <b> Direccion Propietario:</b>
           {!! $vehiculo->propietario->direccion !!}
          </span>
        </div>
        <div class="m-widget12__item">
          <span class="m-widget12__text1">
            <b> Telefono Propietario</b>
           {!! $vehiculo->propietario->telefono !!}
          </span>
          <span class="m-widget12__text2">
            <b> Ciudad Propietario </b>
           {!! $vehiculo->propietario->id_ciudad !!}
          </span>
        </div>
			</div>
	</div>
  </div>
<div class="row">
  <div class="col-md-12">
    <h3 class="m-portlet__head-text" style="color: #3F51B5;    font-weight: 700;    text-align: center;    margin-bottom: 32px;">
						Conductores Asignados
		</h3>
    <div class="tab-content">
			<div class="tab-pane active" id="m_widget11_tab1_content">
				<!--begin::Widget 11-->
				<div class="m-widget11">
					<div class="table-responsive">
						<!--begin::Table-->
						<table class="table">
							<!--begin::Thead-->
							<thead>
								<tr style="text-align: center;">
									<td class="m-widget11__app">
										Fecha Asignación
									</td>
									<td class="m-widget11__sales">
										Identificacion
									</td>
									<td class="m-widget11__change">
										Nombre
									</td>
									<td class="m-widget11__price">
									 Direccion
									</td>
									<td class="m-widget11__total m--align-right">
										Telefono
									</td>
                  <td class="m-widget11__total m--align-right">
										Ciudad
									</td>
								</tr>
							</thead>

							<tbody>
                @foreach($Conductores as $conductor)
								<tr style="text-align: center;">
									<td>
                    {{$conductor->fecha_asignacion }}
									</td>
									<td>
                    {{$conductor->conductor->cedula }}
									</td>
                  <td>
                    {{$conductor->conductor->name }} {{$conductor->conductor->segundo_nombre }}  {{$conductor->conductor->apellidos }}
                  </td>
									<td>
                    {{$conductor->conductor->direccion }}
									</td>
                  <td>
                    {{$conductor->conductor->telefono }}
                  </td>
									<td class="m--align-right m--font-brand">
                    {{$conductor->conductor->id_ciudad }}
									</td>
								</tr>
              @endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!--end::Widget 11-->
			</div>
		</div>
  </div>
</div>
