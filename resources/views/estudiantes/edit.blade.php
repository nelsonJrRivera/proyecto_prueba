@extends('layouts.app')

@section('content')
<html>
<div class="container">
    <h1>Editar Estudiante</h1>
    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $estudiante->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{ $estudiante->apellidos }}" required>
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="number" 
                name="edad" 
                id="edad" 
                class="form-control" 
                value="{{ $estudiante->edad }}" 
                required 
                min="10" 
                max="100"
                onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                oninput="if(this.value.length > 3) this.value = this.value.slice(0, 3);
                this.value = this.value.replace(/[^0-9]/g, '');">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $estudiante->email }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" 
                name="telefono" 
                id="telefono" 
                value="{{ $estudiante->telefono }}" 
                class="form-control" 
                required
                pattern="[0-9]{10}"
                maxlength="10"
                onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                placeholder="Ingrese 10 dígitos">
        </div>
        <div class="form-group">
            <label for="grupo_id">Grupo</label>
            <select name="grupo_id" id="grupo_id" class="form-control" required>
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->id }}" {{ $estudiante->grupo_id == $grupo->id ? 'selected' : '' }}>{{ $grupo->nombre_grupo }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
</div>
</html>
@endsection

