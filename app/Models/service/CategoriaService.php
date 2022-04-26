<?php

namespace App\Models\service;

use App\Models\repository\CategoriaRepository;
use App\Models\repository\Repository;
use Yajra\DataTables\Facades\DataTables;


class CategoriaService implements ICategoriaService
{

    private Repository $categoriaRepository;
    function __construct(CategoriaRepository $categoriaRepository)
    {
        $this->categoriaRepository = $categoriaRepository;
    }

    public function getDataTableCatagories()
    {
        $categories = $this->categoriaRepository->getAll(); //Se trae todos los categories
        return DataTables::of($categories)
            ->addColumn('preguntas', function ($categories) {
                $preguntas = ' <td>
            <center>
                <a href="' . route('admin.preguntas.index', $categories->id) . '" style="color: white;" class="btn btn-primary"><i
                        class="far fa-object-group"></i> Preguntas <span
                        class="badge bg-danger">' . $categories->preguntas_count . '</span>
                </a>
            </center>
        </td>';
                return $preguntas;
            })
            ->addColumn('acciones', function ($categories) {
                $acciones = '<a href="' . route('admin.categorias.edit', $categories->id) . '" class = "btn btn-info btn-md mb-2-md"> Editar </a>';
                $acciones .= ' &nbsp;<button type="button" id="' . $categories->id . '"  class="delete btn btn-danger btn-md">Eliminar</button>';
                return $acciones;
            })
            ->rawColumns(['acciones', 'preguntas'])
            ->make(true);
    }

    public function categoryStore($request)
    {
        $this->categoriaRepository->save($request);
    }

    public function categoryFindOrError($id)
    {
        return $this->categoriaRepository->findOrError($id);
    }

    public function categoryUpdate($request, $id)
    {
        $this->categoryFindOrError($id)->update($request);
    }

    public function categoryDelete($id)
    {
        $this->categoryFindOrError($id)->delete();
    }
}