formulario de edicion
@extends('layouts.app')
@section('content')
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error )
                <li>{{$error}}</li>
                
            @endforeach
        </ul>

    </div>
@endif
<div class="container">
    <h1>Editar empleados</h1>
    <form action="{{url('/discipline/'.$discipline->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}

    @include('discipline.form');


    </form>
</div>
@endsection