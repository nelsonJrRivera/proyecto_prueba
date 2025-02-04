@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Grupo</h1>
    <p><strong>ID:</strong> {{ $grupo->id }}</p>
    <p><strong>Semestre:</strong> {{ $grupo->semestre }}</p>
    <p><strong>Nombre del Grupo:</strong> {{ $grupo->nombre_grupo }}</p>
    <p><strong>Turno:</strong> {{ $grupo->turno }}</p>
    <a href="{{ route('grupos.index') }}" class="btn btn-secondary">Volver a la lista</a>
</div>
@endsection