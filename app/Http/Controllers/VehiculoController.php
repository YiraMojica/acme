<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevehiculoRequest;
use App\Http\Requests\UpdatevehiculoRequest;
use App\Repositories\vehiculoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Users;
use App\Models\ConductorVehiculo;
use App\Models\Vehiculo;
use Flash;
use Response;

class vehiculoController extends Controller
{
    /** @var  vehiculoRepository */
    private $vehiculoRepository;

    public function __construct(vehiculoRepository $vehiculoRepo)
    {
        $this->vehiculoRepository = $vehiculoRepo;
    }

    /**
     * Display a listing of the vehiculo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vehiculos = $this->vehiculoRepository->all();
        return view('vehiculos.index')
            ->with('vehiculos', $vehiculos);
    }

    /**
     * Show the form for creating a new vehiculo.
     *
     * @return Response
     */
    public function create()
    {
      $marcas= ['' => 'Seleccionar'] + Marca::pluck('nombre', 'id')->toArray();
      //El ideal es que se envien los usuarios con Rol Propietario por tema de tiempo envio sin roles
      $usuarios= ['' => 'Seleccionar'] + Users::where('estado',1)->pluck('name', 'id')->toArray();
      return view('vehiculos.create',compact('marcas','usuarios'));
    }

    /**
     * Store a newly created vehiculo in storage.
     *
     * @param CreatevehiculoRequest $request
     *
     * @return Response
     */
    public function store(CreatevehiculoRequest $request)
    {
        $now = new \DateTime();
        $fechaActual = $now->format('Y-m-d H:i:s');
        $Vehiculo = new Vehiculo();
        $Vehiculo->placa=$request->input('placa');
        $Vehiculo->color=$request->input('color');
        $Vehiculo->id_marca=$request->input('id_marca');
        $Vehiculo->tipo_vehiculo=$request->input('tipo_vehiculo');
        $Vehiculo->id_propietario=$request->input('id_propietario');
        $Vehiculo->id_conductor=$request->input('id_conductor');
        $Vehiculo->save();

        $Conductor = new ConductorVehiculo();
        $Conductor->id_vehiculo = $Vehiculo->id;
        $Conductor->id_conductor = $request->input('id_conductor');
        $Conductor->fecha_asignacion=$fechaActual;
        $Conductor->save();

        Flash::success('Vehiculo saved successfully.');
        return redirect(route('vehiculos.index'));
    }

    /**
     * Display the specified vehiculo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehiculo = $this->vehiculoRepository->find($id);
        $Conductores=ConductorVehiculo::where('id_vehiculo',$id)->get();
        if (empty($vehiculo)) {
            Flash::error('Vehiculo not found');

            return redirect(route('vehiculos.index'));
        }

        return view('vehiculos.show',compact('Conductores','vehiculo'));
    }

    /**
     * Show the form for editing the specified vehiculo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehiculo = $this->vehiculoRepository->find($id);

        if (empty($vehiculo)) {
            Flash::error('Vehiculo not found');

            return redirect(route('vehiculos.index'));
        }
        $marcas= ['' => 'Seleccionar'] + Marca::pluck('nombre', 'id')->toArray();
        //El ideal es que se envien los usuarios con Rol Propietario por tema de tiempo envio sin roles
        $usuarios= ['' => 'Seleccionar'] + Users::pluck('name', 'id')->toArray();

        return view('vehiculos.edit',compact('marcas','usuarios'))->with('vehiculo', $vehiculo);
    }

    /**
     * Update the specified vehiculo in storage.
     *
     * @param int $id
     * @param UpdatevehiculoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevehiculoRequest $request)
    {
        $now = new \DateTime();
        $fechaActual = $now->format('Y-m-d H:i:s');
        $vehiculo = $this->vehiculoRepository->find($id);
        if (empty($vehiculo)) {
            Flash::error('Vehiculo not found');

            return redirect(route('vehiculos.index'));
        }
        $vehiculo = $this->vehiculoRepository->update($request->all(), $id);
        if ($vehiculo->id_conductor!=$request->input('id_conductor')) {
          $vehiculo = Vehiculo::where('id',$id)->update(['id_conductor' => $request->input('id_conductor')]);
          $Conductor = new ConductorVehiculo();
          $Conductor->id_vehiculo = $id;
          $Conductor->id_conductor = $request->input('id_conductor');
          $Conductor->fecha_asignacion=$fechaActual;
          $Conductor->save();
        }
        Flash::success('Vehiculo updated successfully.');

        return redirect(route('vehiculos.index'));
    }

    /**
     * Remove the specified vehiculo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehiculo = $this->vehiculoRepository->find($id);

        if (empty($vehiculo)) {
            Flash::error('Vehiculo not found');

            return redirect(route('vehiculos.index'));
        }

        $this->vehiculoRepository->delete($id);

        Flash::success('Vehiculo deleted successfully.');

        return redirect(route('vehiculos.index'));
    }
}
