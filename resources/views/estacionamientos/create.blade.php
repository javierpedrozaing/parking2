@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'estacionamientos.store']) !!}

        @include('estacionamientos.fields')

    {!! Form::close() !!}
</div>
@endsection
