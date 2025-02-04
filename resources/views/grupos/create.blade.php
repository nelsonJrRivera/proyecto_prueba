@extends('layouts.app')

@section('content')
<html>
<div class="container">
    <h1>Crear Grupo</h1>
    <form action="{{ route('grupos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="semestre">Semestre</label>
            <input type="number" 
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
            <input type="text" name="nombre_grupo" id="nombre_grupo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="turno">Turno</label>
            <select name="turno" id="turno" class="form-control" required>
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>
</html>
@endsection
