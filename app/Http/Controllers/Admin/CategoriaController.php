<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;
use App\Models\service\CategoriaService;
use App\Models\service\ICategoriaService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriaController extends Controller
{
    private ICategoriaService $categoriaService;
    function __construct(CategoriaService $categoriaService)
    {
        $this->categoriaService = $categoriaService;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) { //si hay una peticion AJax
            return $this->categoriaService->getDataTableCatagories();
        }
        return view('admin.categorias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaRequest $request)
    {
        $this->categoriaService->categoryStore($request->validated());
        Alert::success('Recurso Creado!', 'Se ha creado la Categoria con exito!');
        return redirect(route('admin.categorias.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = $this->categoriaService->categoryFindOrError($id);
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaRequest $request, $id)
    {
        $this->categoriaService->categoryUpdate($request->validated(), $id);
        Alert::success('Recurso Editado!', 'Se ha editado la Categoria con exito!');
        return redirect(route('admin.categorias.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCategoria($id)
    {
        $this->categoriaService->categoryDelete($id);
    }
}