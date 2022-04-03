<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

    $nombresCategoria = 
    [
        ' PERTINENCIA Y DISPONIBILIDAD DE MEDIOS Y RECURSOS PARA EL APRENDIZAJE', 
        ' UBICACION LABORAL DE LOS EGRESADOS', 
        ' DESEMPEÑO PROFESIONAL DE LOS EGRESADOS (COHERENCIA ENTRE LA FORMACIÓN Y EL TIPO DE EMPLEO)',
        'EXPECTATIVAS DE DESARROLLO, SUPERACIÓN PROFESIONAL Y DE ACTUALIZACIÓN',
        ' PARTICIPACIÓN SOCIAL DE LOS EGRESADOS',
        ' COMENTARIOS Y SUGERENCIAS',
    ]; 
    
    for ( $i=0; $i<6; $i++){
        Categoria::create([
            'categoria' => $nombresCategoria[$i]
        ]);
    }
  }
}
