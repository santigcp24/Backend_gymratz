@extends('layouts.app') <!-- O tu layout principal -->

@section('content')
    <!-- Formulario para editar el miembro -->
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $member->name }}">
        <input type="email" name="email" value="{{ $member->email }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection
