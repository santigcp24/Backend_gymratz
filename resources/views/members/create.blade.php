@extends('layouts.app') <!-- O tu layout principal -->

@section('content')
    <!-- Formulario para crear un nuevo miembro -->
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre">
        <input type="email" name="email" placeholder="Correo electrónico">
        <button type="submit">Guardar</button>
    </form>
@endsection
