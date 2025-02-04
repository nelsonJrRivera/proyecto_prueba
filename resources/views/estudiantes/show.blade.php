@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Estudiante</h1>
    <p><strong>ID:</strong> {{ $estudiante->id }}</p>
    <p><strong>Nombre:</strong> {{ $estudiante->nombre }}</p>
    <p><strong>Apellidos:</strong> {{ $estudiante->apellidos }}</p>
    <p><strong>Edad:</strong> {{ $estudiante->edad }}</p>
    <p><strong>Email:</strong> {{ $estudiante->email }}</p>
    <p><strong>Teléfono:</strong> {{ $estudiante->telefono }}</p>
    <p><strong>Grupo:</strong> {{ $estudiante->grupo->nombre_grupo }}</p>
    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Volver a la lista</a>
</div>
@endsection
