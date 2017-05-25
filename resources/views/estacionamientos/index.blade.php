@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Estacionamientos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('estacionamientos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($estacionamientos->isEmpty())
                <div class="well text-center">No Estacionamientos found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Identificador</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($estacionamientos as $estacionamientos)
                        <tr>
                            <td>{!! $estacionamientos->identificador !!}</td>
                            <td>
                                <a href="{!! route('estacionamientos.edit', [$estacionamientos->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('estacionamientos.delete', [$estacionamientos->id]) !!}" onclick="return confirm('Are you sure wants to delete this Estacionamientos?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection