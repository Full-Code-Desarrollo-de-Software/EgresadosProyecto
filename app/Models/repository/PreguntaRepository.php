<?php

namespace App\Models\repository;

use App\Models\Pregunta;

class PreguntaRepository extends Repository
{
    const QUERY = ['id', 'parent_id', 'pregunta', 'categoria_id'];
    const RELATIONS = ['respuestas', 'subpreguntas'];

    function __construct(Pregunta $pregunta)
    {
        parent::__construct($pregunta, self::QUERY, self::RELATIONS);
    }

    public function getWithRelationsInArray()
    {
            return $this->model->select(self::QUERY)->with(self::RELATIONS)->get()->toArray();
        
    }

    public function getItsResponsesInArray($year)
    {
        return $this->model->select('preguntas.pregunta', 'preguntas.categoria_id', 'respuestas.respuesta')
        ->join('respuestas', 'preguntas.id', 'respuestas.pregunta_id')
        ->join('egresado_respuesta', 'respuestas.id', 'egresado_respuesta.respuesta_id')
        ->join('egresados', 'egresado_respuesta.egresado_id', 'egresados.id')
        ->where('egresados.id', auth()->user()->id)
        ->whereYear('egresado_respuesta.created_at', $year)
        ->get()->toArray();
    }
}