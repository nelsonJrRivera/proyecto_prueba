@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Grupos</h1>
    <a href="{{ route('grupos.create') }}" class="btn btn-primary">Crear Grupo</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Semestre</th>
                <th>Nombre del Grupo</th>
                <th>Turno</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grupos as $grupo)
            <tr>
                <td>{{ $grupo->id }}</td>
                <td>{{ $grupo->semestre }}</td>
                <td>{{ $grupo->nombre_grupo }}</td>
                <td>{{ $grupo->turno }}</td>
                <td>
                    <a href="{{ route('grupos.edit', $grupo->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
