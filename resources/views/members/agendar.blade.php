<!-- resources/views/members/agendar.blade.php -->

@extends('layouts.app') <!-- Asegúrate de que la vista use el layout principal de tu aplicación -->

@section('content')
    <h1>Agendar Clases</h1>
    <!-- Formulario para seleccionar una clase -->
    <form action="{{ route('members.storeReserva') }}" method="POST">
        @csrf
        <label for="clase_id">Seleccione la clase:</label>
        <select name="clase_id" id="clase_id">
            @foreach ($clases as $clase)
                <option value="{{ $clase->id }}">{{ $clase->nombre_clase }}</option>
            @endforeach
        </select>
        <button type="submit">Agendar Clase</button>
    </form>
@endsection
