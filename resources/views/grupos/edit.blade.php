@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Grupo</h1>
    <form action="{{ route('grupos.update', $grupo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="semestre">Semestre</label>
            <input type="number" 
            value="{{ $grupo->semestre }}" 
            name="semestre" 
            id="semestre" 
            class="form-control" 
            required 
            min="1" 
            max="20" 
            oninput="this.value = this.value.replace(/[^0-9]/g, ''); 
                    if(this.value > 20) this.value = 20;
                    if(this.value < 1) this.value = 1;">
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
