<?php

namespace Database\Seeders;

use App\Models\Egresado;
use App\Models\Pregunta;
use Illuminate\Database\Seeder;

class EgesadoPreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randoms = [
            [1, 4],
            [5,8],
            [9,12],
            [13,16],
            [17,20],
            [21,24],
            [25,28],
            [29,34],
            [35,38],
            [39,43],
            [44,50],
            [51,55],
            [56,59],
            [60,64],
            [65,68],
            [69,74],
            [75,78],
            [79,84],
            [85,88],
            [89,93],
            [94,98],
            [99,103],
            [104,108],
            [109,113],
            [114,118],
            [119,123],
            [124,128],
            [129,133],
            [134,138],
            [139,143],
            [144,148],
            [149,150],
            [151,152],
            [153,154],
            [155,156],
            [157,158],
        ];

        $respuestas =[];

        for ($i=0; $i < Pregunta::count()-1 ; $i++) { 
            $respuestas[] = rand($randoms[$i][0],$randoms[$i][1]);
        }

        Egresado::find(1)->respuestas()->attach($respuestas);
    }
}
