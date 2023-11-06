@extends('layouts.app') <!-- O tu layout principal -->

@section('content')
    <!-- Detalles del miembro -->
    <p>Nombre: {{ $member->name }}</p>
    <p>Correo: {{ $member->email }}</p>
    <!-- Puedes mostrar más detalles del miembro aquí -->
@endsection
