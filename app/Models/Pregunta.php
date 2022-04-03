<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pregunta extends Model
{
    protected $guarded = ['id'];
    const OPCIONMULTIPLE = 1;
    const PREGUNTAMULTIPLE = 2;

    use HasFactory;

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class, 'pregunta_id');
    }

    public function categoria()
    {
        return $this->BelongsTo('App\Models\Categoria', 'id');
    }

    public function subpreguntas()
    {
        return $this->hasMany(Pregunta::class, 'parent_id');
    }

    public function statsRespuestas($año = null)
    {
        return EgresadoRespuesta::select('egresado_respuesta.respuesta_id', 'respuestas.respuesta', DB::raw('count(*) as total'))
            ->join('respuestas', 'egresado_respuesta.respuesta_id', 'respuestas.id')
            ->join('preguntas', 'respuestas.pregunta_id', 'preguntas.id')
            ->where('preguntas.id', $this->id)
            ->year($año)
            ->groupBy('egresado_respuesta.respuesta_id')
            ->get();
    }
}
