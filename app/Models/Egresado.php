<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    use HasFactory;

    public function respuestas(){
        return $this->hasMany('App\Models\Respuesta', 'respuesta_id');
    }

    public function domicilio(){
        return $this->hasOne('App\Models\Domicilio', 'domicilio_id');
    }

    public function DatosEgreso(){
        return $this->hasOne('App\Models\DatosEgreso', 'DatosEgreso_id');
    }
}
