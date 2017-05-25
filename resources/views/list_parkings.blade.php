 <div class="panel panel-primary col-xs-12 col-sm-4 col-md-4" style="padding:20px;">             

    <table>
    <tr>
        <th>Tipo Lugar</th>
        <th>Nombre Ubicación</th>
        <th>EStado</th>
        <th>Descripción ubicación</th>
    </tr>
    @forelse($lugares as $lugar)                        
        <tr>
            
            <td>{{ $lugar->tipo_lugar }}</td>
            <td>{{ $lugar->nombre_ubicacion }}</td>                                
            <td>{{ $lugar->estado->estado }}</td>
            <td>{{ $lugar->descripcion_ubicacion }}</td>
        </tr>

        @empty
            <p>NO HAY LUGARES DISPONIBLES</p>
        @endforelse
    </table>
</div>