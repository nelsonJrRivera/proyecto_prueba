@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Grupo</h1>
    <form action="{{ route('grupos.update', $grupo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="semestre">Semestre</label>
            <input type="number" name="semestre" id="semestre" class="form-control" value="{{ $grupo->semestre }}" required min="1" max="99">
        </div>
        <div class="form-group">
            <label for="nombre_grupo">Nombre del Grupo</label>
            <input type="text" name="nombre_grupo" id="nombre_grupo" class="form-control" value="{{ $grupo->nombre_grupo }}" required>
        </div>
        <div class="form-group">
            <label for="turno">Turno</label>
            <select name="turno" id="turno" class="form-control" required>
                <option value="Matutino" {{ $grupo->turno == 'Matutino' ? 'selected' : '' }}>Matutino</option>
                <option value="Vespertino" {{ $grupo->turno == 'Vespertino' ? 'selected' : '' }}>Vespertino</option>
                <option value="Nocturno" {{ $grupo->turno == 'Nocturno' ? 'selected' : '' }}>Nocturno</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
</div>
@endsection
