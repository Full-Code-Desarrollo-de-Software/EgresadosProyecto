<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    public function egresado (){
        return $this->belongsTo('App\Models\Egresado', 'egresado_id');
    }

    public function pregunta (){
        return $this->belongsTo('App\Models\Pregunta', 'pregunta_id');
    }
}
