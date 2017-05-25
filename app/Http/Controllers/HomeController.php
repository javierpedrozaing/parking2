<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\parking;
use App\type_vehicle;
class HomeController extends Controller
{
	function welcome(Request $request){
		$user = $request->user();
		$tipo_vehiculos = type_vehicle::all();
		$lugares_disponibles = parking::where('estado_id', 1)->get();
		//dd($lugares_disponibles); // para imprimir datos por consola
		return view("welcome", ["lugares_disponibles" => $lugares_disponibles, "tipo_vehiculos" => $tipo_vehiculos, "user" => $user	] );
	}
	function administration(Request $request){
		
		$user = $request->user();
		
		return view('administration', ['user' => $user] );
	}
    function list_parkings(){
    	$lugares = parking::all();
    	return view("list_parkings", ["lugares" => $lugares]);
    	 
    }
}