<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    public function respuestas(){
        return $this->hasMany('App\Models\Respuesta', 'respuesta_id');
    }

    public function categoria(){
        return $this->BelongsTo('App\Models\Categoria', 'categoria_id');
    }  
}
