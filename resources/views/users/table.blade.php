<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
      <tr>
        <th>Identificacion</th>
        <th>Pirmer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Telefono</th>
        <th >Action</th>
      </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
            <td>{!! $users->cedula !!}</td>
            <td>{!! $users->name !!}</td>
            <td>{!! $users->segundo_nombre !!}</td>
            <td>{!! $users->apellidos !!}</td>
            <td>{!! $users->email !!}</td>
            <td>{!! $users->	telefono !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$users->id]) !!}" class='btn btn-info m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air' data-toggle="m-tooltip" title="Ver"><i class="fa fa-eye"></i></a>
                    <a href="{!! route('users.edit', [$users->id]) !!}" class='btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air' data-toggle="m-tooltip" title="Editar"><i class="fa fa-pencil-alt"></i></a>

                </div>
                {!! Form::close() !!}
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
