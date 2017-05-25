@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($estacionamientos, ['route' => ['estacionamientos.update', $estacionamientos->id], 'method' => 'patch']) !!}

        @include('estacionamientos.fields')

    {!! Form::close() !!}
</div>
@endsection
