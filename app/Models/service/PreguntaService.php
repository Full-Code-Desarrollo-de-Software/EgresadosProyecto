<?php

namespace App\Models\service;

use App\Models\repository\CategoriaRepository;
use App\Models\repository\PreguntaRepository;
use App\Models\repository\Repository;
use Yajra\DataTables\Facades\DataTables;


class PreguntaService implements IPreguntaService{

    private Repository $preguntaRepository;
    private Repository $categoriaRepository;
    
    function __construct(PreguntaRepository $preguntaRepository, CategoriaRepository $categoriaRepository)
    {
        $this->preguntaRepository = $preguntaRepository;
        $this->categoriaRepository = $categoriaRepository;
    }

    public function getDataTablePreguntas($id)
    {
        $preguntas = $this->categoriaRepository->getPreguntas($id); //Se trae todos los preguntas
        return DataTables::of($preguntas)
        ->addColumn('preguntas', function ($preguntas) {
            $respuestas = ' <td>
        <center>
            <a href="#" style="color: white;" class="btn btn-primary"><i
                    class="fas fa-solid fa-clipboard-check"></i> Respuestas <span
                    class="badge bg-danger">' . $preguntas->respuestas_count . '</span>
            </a>
        </center>
    </td>';
            return $respuestas;
        })
            ->addColumn('acciones', function ($preguntas) {
                $acciones = '<a href="' . route('admin.preguntas.edit', $preguntas->id) . '" class = "btn btn-info btn-md mb-2-md"> Editar </a>';
                $acciones .= ' &nbsp;<button type="button" id="' . $preguntas->id . '"  class="delete btn btn-danger btn-md">Eliminar</button>';
                return $acciones;
            })
            ->rawColumns(['acciones', 'preguntas'])
            ->make(true);
    }

    public function preguntaStore($request)
    {
        $this->preguntaRepository->save($request);
    }

    public function preguntaFindOrError($id)
    {
        return $this->preguntaRepository->findOrError($id);
    }

    public function preguntaUpdate($request, $id)
    {
        $this->preguntaFindOrError($id)->update($request);
    }

    public function preguntaDelete($id)
    {
        $this->preguntaFindOrError($id)->delete();
    }

}
