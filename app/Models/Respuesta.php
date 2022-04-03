<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function egresados()
    {
        return $this->belongsToMany('App\Models\Egresado', 'egresado_id');
    }

    public function pregunta()
    {
        return $this->belongsTo('App\Models\Pregunta', 'id');
    }
}
