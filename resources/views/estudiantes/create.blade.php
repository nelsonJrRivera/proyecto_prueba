@extends('layouts.app')

@section('content')
<html>
<div class="container">
    <h1>Crear Estudiante</h1>
    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="number" 
                name="edad" 
                id="edad" 
                class="form-control" 
                required 
                min="10" 
                max="100"
                onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                oninput="if(this.value.length > 3) this.value = this.value.slice(0, 3);
                this.value = this.value.replace(/[^0-9]/g, '');">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" 
                name="telefono" 
                id="telefono" 
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
                    <option value="{{ $grupo->id }}">{{ $grupo->nombre_grupo }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>
@endsection
