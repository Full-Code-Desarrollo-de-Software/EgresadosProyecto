<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $guarded =  ['id'];

    use HasFactory;

    public function preguntas(){
        return $this->hasMany('App\Models\Pregunta', 'categoria_id');
    }
}
