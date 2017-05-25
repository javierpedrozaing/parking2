<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\vehicle;
use App\parking;
use App\tariff;
use App\type_vehicle;
use App\Http\Requests\CreateVehicleRequest;
class VehiclesController extends Controller
{
     public function show()
	{
		// ir a buscar el carro por placa y mostrarlo en una vista 	
		$vehiculos = vehicle::paginate(1);
		// dd($vehiculos);	
		return view('vehiculos.show', ['vehiculos' => $vehiculos]);
	}
	public function entry(CreateVehicleRequest $request){
		$user_log = $request->user();
		$placa = $request->input('placa');
		$lugar = $request->input('lugar_id');
		$fecha = $request->input('fecha');
		$hora = $request->input('hora');
		$tipo_vehiculo = $request->input('tipo_vehiculo');
		$tipo_tarifa = $request->input('tipo_tarifa');
		$tipo_vehiculo = intval($tipo_vehiculo);
		$lugar = intval($lugar);
		$tipo_tarifa = strval($tipo_tarifa);
		
		 
		// registramos datos del vehiculo
		$vehicle = vehicle::create([
			'placa' => $placa,
			'color' => 'negro',
			'descripcion' => '',
			'lugar_id' => $lugar,
			'user_id' => $user_log->id,
			'foto' => 'null',
			'fecha_ingreso' => $fecha,
			'fecha_salida' => $fecha,
			'hora_ingreso' => $hora,
			'hora_salida' => $hora,
			'type_vehicle_id' => $tipo_vehiculo,
		]);
		// consultamos lugar cambiamos de estado a ocupado
		$lugar_asignado = parking::find($lugar);
		$lugar_asignado->estado_id = 2;
		$lugar_asignado->save();		 
		// consultamos las tarifas del tipo de vehiculo que ingreso por fracción seleccionada
		$tarifa_tipo_vehiculo = tariff::where('type_vehicle_id', $tipo_vehiculo)->value($tipo_tarifa);
		
		// dd($tarifa_tipo_vehiculo);
		return redirect('/');	
	}
	public function show_by_type($type_vehicle){
		
		$type_vehicle = type_vehicle::find($type_vehicle);
		return view('vehiculos.show_by_type', [
			'type_vehicle' =>$type_vehicle,
			]);
	}
	public function exit_vehicle(){

		
	}
}