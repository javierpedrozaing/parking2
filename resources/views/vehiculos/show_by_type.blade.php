@extends("layouts.app");

@section('title')
Home
@endsection

@section('content')

	<div class="panel panel-primary col-xs-12 col-sm-4 col-md-4" style="padding:20px;">  

	<p>LISTADO VEHICULOS TIPO {{$type_vehicle->tipo}}</p>
	<table>
		<tr>
			<th>PLACA</th>
			<th>DUEÑO</th>			
		</tr>
	
		@foreach($type_vehicle->vehicles as $vehicle)
			<tr>
				<td>{{$vehicle->placa}}</td>
				<td>{{$vehicle->user->name}}</td>
			</tr>
		@endforeach
	
	</table>
	</div>

@endsection