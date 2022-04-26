<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreguntaRequest;
use App\Models\Categoria;
use App\Models\repository\CategoriaRepository;
use App\Models\service\IPreguntaService;
use App\Models\service\PreguntaService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PreguntaController extends Controller
{
    private IPreguntaService $preguntaService;
    function __construct(PreguntaService $preguntaService)
    {
        $this->preguntaService = $preguntaService;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        if ($request->ajax()) { //si hay una peticion AJax
            return $this->preguntaService->getDataTablePreguntas($id);
        }
        
        return view('admin.preguntas.index', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.preguntas.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreguntaRequest $request)
    {
        $this->preguntaService->preguntaStore($request->validated());
        Alert::success('Recurso Creado!', 'Se ha creado la Pregunta con exito!');
        return redirect(route('admin.preguntas.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $pregunta = $this->preguntaService->preguntaFindOrError($id);
        return view('admin.preguntas.edit', compact('pregunta', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->preguntaService->preguntaUpdate($request->validated(), $id);
        Alert::success('Recurso Editado!', 'Se ha editado la Pregunta con exito!');
        return redirect(route('admin.preguntas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPregunta($id)
    {
        $this->preguntaService->preguntaDelete($id);
    }
}
