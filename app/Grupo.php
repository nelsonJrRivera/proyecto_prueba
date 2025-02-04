<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['semestre', 'nombre_grupo', 'turno'];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }
}
