<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service\EncuestaService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EncuestaController extends Controller
{
    private EncuestaService $encuestaService;
    function __construct(EncuestaService $encuestaService)
    {
        $this->encuestaService = $encuestaService;
        $this->middleware(['auth:sanctum', 'verified']);

        $this->middleware('encuesta.respondida', ['only' => [
            'create',
            'store',
        ]]);
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = $this->encuestaService->getCategoriesToEncuesta();
        return view('egresados.encuestas.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->encuestaService->storeEncuesta($request);
        Alert::success('Completado!', 'Has realizado tu encuesta con exito regresa el proximo año');

        return redirect(route('inicio'))->with('mensaje', 'Se ha realizado la encuesta satisfactoriamente');
    }


    public function mine()
    {
        $encuestas = $this->encuestaService->getEncuestasByUserAuth();
     
        return view('egresados.encuestas.mine', compact('encuestas'));
    }
    public function showMine($year)
    {

        $categorias = $this->encuestaService->getCategoriesToShow($year);
        return view('egresados.encuestas.show-mine', compact('categorias'));
    }
}