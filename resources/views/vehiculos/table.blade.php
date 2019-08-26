<div class="table-responsive">
    <table class="table" id="vehiculos-table">
        <thead>
          <tr>
            <th>Placa</th>
            <th>Color</th>
            <th>Marca</th>
            <th>Tipo Vehiculo</th>
            <th>Propietario</th>
            <th>Conductor</th>
            <th><center> Action</center> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($vehiculos as $vehiculo)
            <tr>
                <td>{!! $vehiculo->placa !!}</td>
            <td>{!! $vehiculo->color !!}</td>
            <td>{!! $vehiculo->marca->nombre !!}</td>
            <td>@if($vehiculo->tipo_vehiculo==1) Particular @else Publico @endif</td>
            <td>{!! $vehiculo->propietario->name !!}  {{$vehiculo->propietario->segundo_nombre }}  {{$vehiculo->propietario->apellidos }}</td>
            <td>@if (isset($vehiculo->conductor)) {{$vehiculo->conductor->name }} @else Sin Asignar @endif</td>
                <td style="text-align: center;">
                    {!! Form::open(['route' => ['vehiculos.destroy', $vehiculo->id], 'method' => 'delete']) !!}
                    <div class='m-demo__preview m-demo__preview--btn'>
                        <a href="{!! route('vehiculos.show', [$vehiculo->id]) !!}" class='btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air' data-toggle="m-tooltip" title="Ver"><i class="fa fa-eye"></i></a>
                        <a href="{!! route('vehiculos.edit', [$vehiculo->id]) !!}" class='btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air' data-toggle="m-tooltip" title="Editar"><i class="fa fa-pencil-alt"></i></a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air','data-toggle'=>'m-tooltip','title'=>'Eliminar', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
