<?php

namespace Database\Seeders;

use App\Models\Egresado;
use Illuminate\Database\Seeder;

class EgresadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Egresado::create([
            'nombre' => 'Yadira',
            'sexo' => 'Femenino',
            'estado_civil' => 'Soltera',
            'tel_paterno' => '4921134954',
            'n_control' => '19450664',
            'fecha_Nacimiento' => '2001/10/20',
            'telefono' => '4921958229',
            'ingles' => 70,
            'otroIdioma' => 10,
            'validado' => 1,
            'user_id' => 1
        ]);
    }
}
