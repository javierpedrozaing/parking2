@extends("layouts.app");

@section('title')
Home
@endsection

@section('content')

<div class="panel panel-primary col-xs-12 col-sm-6 col-md-12" style="padding:20px;">  
<table>
	<tr>
		<th>PLACA</th>
		<th>ESTACIONAMIENTO O LUGAR</th>
		<th>TIPO VEHICULO</th>
		<th>USUARIO O PROPIETARIO</th>
	</tr>
	
	@foreach ($vehiculos as $vehicle)
		<tr>
			<td>{{$vehicle->placa}}</td>
			<td>{{$vehicle->lugar->nombre_ubicacion}}</td>
			<td><a href="/type/{{$vehicle->type_vehicle_id}}">{{$vehicle->type_vehicle->tipo}}</a> </td>
			<td>{{$vehicle->user->name}}</td>
		</tr>
	@endforeach
	
	
	
</table>

</div>

<div class="form-group">
	{{ $vehiculos->links() }}
</div>
@endsection