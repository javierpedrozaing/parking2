 @extends("layouts.app");

@section('title')
Home
@endsection

@section('content')

    @if (Auth::guest())
         <div>
            <p>DEBES INGRESAR AL SISTEMA</p>
        </div>
    @else
    <p>Estas logueado como {{$user->name }}</p>
    <form class="form-inline" action="/vehiculo/entry" method="post" style="padding:5% 10%;">    
        {{ csrf_field() }}    

        <div class="row">
             <div>
                    @if ($errors->any())
                    <div class="row alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)                        
                            <li>{{ $error }}</li>                                                    
                        @endforeach
                    </ul>
                    </div>
                     @else
                        <div class="row has-success">
                            <p>Vehiculo registrado exitosamente</p>
                        </div> 
                    @endif

            </div>
        </div>    

            <div class="row" >                
                <div class="col-xs-12 col-sm-3 col-md-2">

                    <div class="form-group">
                        <label for="fecha">FECHA:</label>
                        <input type="text" readonly="true" name="fecha" value="{{date("j-n-Y") }}"> 
                        <br>
                        <label for="fecha">HORA: </label>
                        <input type="text" readonly="true" name="hora" value="{{date("h: i A")}}"> 
                    </div>


                    <div class="form-group">
                       <label  for="exampleInputEmail3">Tipo de vehiculo:</label>
                        <select class="form-control" name="tipo_vehiculo">

                            @foreach($tipo_vehiculos as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                            @endforeach
                            
                        </select>                        
                    </div>                   
                </div>    
                <div class="col-xs-12 col-sm-3 col-md-2">
                    <div class="form-group">
                       <label  for="exampleInputEmail3">Tipo tarifa:</label>
                        <select class="form-control" name="tipo_tarifa">
                            <option value="valor_minuto">Por Minuto</option>
                            <option value="valor_hora">Por Hora</option>
                            <option value="valor_dia">Por Día</option>
                            <option value="valor_noche">Por Noche</option>
                            <option value="valor_mes">Por Mes</option>                                                                    
                        </select>                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="form-group @if ($errors->has('placa')) has-error @endif" >
                       <label  for="exampleInputEmail3">Placa:</label>
                        <input class="form-control" type="text" id="formGroupInputLarge" name="placa" placeholder="Placa del carro">
                        
                    </div>
                </div> 
                  
                <div class="col-xs-12 col-sm-1 col-md-2">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" id="entrada_btn">ENTRADA</button>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-1 col-md-1">

                     <div class="form-group">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="salida_btn">SALIDA</button>
                    </div>
                </div>            

            </div>
    
<br>
<hr class="half-rule"/>
            <div class="row">   
            <div class="panel panel-primary col-xs-12 col-sm-4 col-md-4" style="padding:20px;">             
                <div>
                    <label  for="exampleInputEmail3">Fecha Entrada:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <label  for="exampleInputEmail3">Hora Entrada:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">    <br>        
                    <label  for="exampleInputEmail3">Hora Salida:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                
                    <label  for="exampleInputEmail3">Tipo de Vehículo:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <label  for="exampleInputEmail3">Placa:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <label  for="exampleInputEmail3">Tipo tarifa:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <label  for="exampleInputEmail3">Lugar:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>

                    <label  for="exampleInputEmail3">Impuesto:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <label  for="exampleInputEmail3">Subtotal:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <label  for="exampleInputEmail3">Total:</label><br>
                    <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input"><br>
                    <br>
                    <input type="button" value="GENERAR TICKET" class="btn btn-primary btn-lg btn-block">
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                     <div class="panel panel-primary ">
                          <!-- Default panel contents -->
                          <div class="panel-heading">LUGARES DISPONIBLES</div>                         
                          <!-- Table -->
                          <table class="table table-bordered">
                             <tr>
                                <th></th>
                                <th>Tipo lugar</th>                                
                                <th>Nombre</th>    
                                <th>Estado</th>                            
                                <th>Descripción</th>                              
                            </tr>

                          @forelse($lugares_disponibles as $lugar)
                            
                            <tr>
                                <td><input type="radio" name="lugar_id" value="{{ $lugar->id }}">
                                
                                 </td>
                                <td>{{ $lugar->tipo_lugar }}</td>
                                <td>{{ $lugar->nombre_ubicacion }}</td>                                
                                <td>{{ $lugar->estado_id }}</td>
                                <td>{{ $lugar->descripcion_ubicacion }}</td>
                            </tr>

                          @empty
                            <p>NO HAY LUGARES DISPONIBLES</p>
                          @endforelse

                           
                          </table>
                    </div>
                </div>
            </div>
    </form>
    
   
@endif

@endsection



