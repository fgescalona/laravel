@extends('layout')

@section('title', "Lista de Usuarios")

@section('content')

<h1>{{ $title }}</h1>

<hr>

<ul>
    @forelse($users as $user)
        <li>{{ $user }}</li>
    @empty
        <h3>No hay usuarios registrados</h3>
    @endforelse
</ul>

@endsection


