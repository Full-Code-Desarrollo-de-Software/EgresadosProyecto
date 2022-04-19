<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Pregunta;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;

class Charts extends Component
{
    public $labels = false;
    public $abierto = false;
    public $categoria = "0";
    public $pregunta = "0";
    public $año;
    public function mount()
    {
        $this->año = now()->year;
    }
    public function render()
    {
        $columnChartModel =
            (new ColumnChartModel())
            ->setAnimated(true)
            ->setLegendVisibility(false)
            ->setDataLabelsEnabled($this->labels)
            ->setOpacity(0.75)
            ->setColors(['#18396a', '#9e9e9e'])
            ->withGrid();
        $pieChartModel =
            (new PieChartModel())
            ->setAnimated(true)
            ->setColors(['#18396a', '#9e9e9e'])
            ->setOpacity(1)
            ->legendPositionBottom()
            ->legendHorizontallyAlignedCenter()
            ->setDataLabelsEnabled($this->labels);

        $areaChartModel = (new AreaChartModel())
            ->setAnimated(true)
            ->withLegend()
            ->setSmoothCurve()
            ->withDataLabels()
            ->setXAxisVisible(true)
            ->setDataLabelsEnabled($this->labels)
            ->setColors(['#18396a', '#9e9e9e']);

        $this->setChartsValues($columnChartModel, $pieChartModel, $areaChartModel);
        return view('livewire.charts', compact(['columnChartModel', 'pieChartModel', 'areaChartModel']));
    }

    public function updatedCategoria()
    {
        $this->categoria == "0" ? $this->abierto = false : $this->abierto = true;
        $this->reset(['pregunta']);
    }

    public function getCategoriasProperty()
    {
        return Categoria::select('id', 'categoria')->get();
    }

    public function getPreguntasProperty()
    {
        return Pregunta::select('id', 'pregunta')->where('categoria_id', $this->categoria)->get();
    }

    public function setLabels()
    {
        $this->labels = !$this->labels;
    }

    private function setChartsValues($columnChartModel, $pieChartModel, $areaChartModel)
    {
        $respuestas = Pregunta::find($this->pregunta);
        if ($respuestas != []) {
            $title = $this->año ? $respuestas->pregunta . ' en el año ' . $this->año : $respuestas->pregunta . ' en todos los años';
            $columnChartModel->setTitle($title);
            $pieChartModel->setTitle($title);
            $areaChartModel->setTitle($title);
            $respuestas = $respuestas->statsRespuestas($this->año);
            foreach ($respuestas as $respuesta) {
                $columnChartModel->addColumn($respuesta['respuesta'], $respuesta['total'], '#f6ad55');
                $pieChartModel->addSlice($respuesta['respuesta'], $respuesta['total'], '#f6ad55');
                $areaChartModel->addPoint($respuesta['respuesta'], $respuesta['total'], '#f6ad55');
            }
        }
    }
}