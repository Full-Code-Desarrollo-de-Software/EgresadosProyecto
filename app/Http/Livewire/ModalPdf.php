<?php

namespace App\Http\Livewire;

use App\Models\Pregunta;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

class ModalPdf extends Component
{
    protected $listeners = ['generatePDF' => 'generatePDF'];

    public function render()
    {
        return view('livewire.modal-pdf');
    }

    public function getPreguntasProperty()
    {
        return Pregunta::select('id', 'pregunta')->get();
    }
  
   /*  public function generatePDF($preguntasSeleccionadas)
    {
        
    $pdf = PDF::loadView('admin.graficas.reporte', compact('preguntasSeleccionadas'));
    return $pdf->download('invoice.pdf');
    } */
}