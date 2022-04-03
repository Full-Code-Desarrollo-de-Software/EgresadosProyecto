<?php

namespace App\Models\service;

use App\Models\repository\CategoriaRepository;
use App\Models\repository\EncuestaRepository;
use App\Models\repository\PreguntaRepository;
use App\Models\service\IEncuestaService;
use Illuminate\Http\Request;


class EncuestaService implements IEncuestaService
{
    private CategoriaRepository $categoriaRepository;
    private PreguntaRepository $preguntaRepository;
    private EncuestaRepository $encuestaRepository;
    function __construct(CategoriaRepository $categoriaRepository, PreguntaRepository $preguntaRepository, EncuestaRepository $encuestaRepository)
    {
        $this->categoriaRepository = $categoriaRepository;
        $this->preguntaRepository = $preguntaRepository;
        $this->encuestaRepository = $encuestaRepository;
    }

    public function getCategoriesToEncuesta()
    {
        $categorias = $this->categoriaRepository->getReducedQuery(); //Trae id y nombre de la categoria
        $preguntas = $this->preguntaRepository->getWithRelationsInArray(); //Trae las preguntas con sus relaciones "Las respuestas y las subpreguntas"
        $this->setResponsesToCategory($categorias,$preguntas);

        return $categorias;
    }

    public function getCategoriesToShow($year)
    {
    
        $categorias = $this->categoriaRepository->getReducedQuery(); //Trae id y nombre de la categoria
        $preguntas = $this->preguntaRepository->getItsResponsesInArray($year);
        $this->setResponsesToCategory($categorias,$preguntas);
       
        return $categorias;
    }

    public function storeEncuesta(Request $request)
    {
        $arrayRespuestas = array_values($request->all()); //Trae los valores [Respuestas0]
        array_shift($arrayRespuestas); //Quita el token csrf
        auth()->user()->egresado->respuestas()->attach($arrayRespuestas);
        $this->encuestaRepository->save(['user_id' => auth()->user()->id]);
    }


    public function getEncuestasByUserAuth(){
        return auth()->user()->encuestas;
    }

    private function setResponsesToCategory($categorias, $preguntas){
        foreach ($categorias as $categoria) {
            $categoria->setAttribute("preguntas", array_filter($preguntas, function ($pregunta) use ($categoria) {
                return $pregunta['categoria_id'] == $categoria->id ?? $pregunta;
            }));
        }

    }

    
}