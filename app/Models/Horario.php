<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Horario extends Model
{
    use HasFactory;
    public function materia()
    {
        return $this->belongsTo(Materia::class, 'materia_id'); //Relacion de claves
    }
    public function docente()
    {
        return $this->belongsTo(Docente::class, 'docente_id');//Relacion de claves
    }
}
