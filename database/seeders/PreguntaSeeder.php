<?php

namespace Database\Seeders;

use App\Models\Pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $nombresCat1 = [
            'Calidad de los docentes:',
            'Plan de Estudios: ',
            'Oportunidad de participar en proyectos de investigación y desarrollo: ',
            'Énfasis que se le prestaba a la investigación dentro del proceso de enseñanza',
            'Satisfacción con las condiciones de estudio (infraestructura):',
            'Experiencia obtenida a través de la residencia profesional ',
        ];
        for ($i = 0; $i < count($nombresCat1); $i++) {
            Pregunta::create([
                'pregunta' => $nombresCat1[$i],
                'categoria_id' => '1'
            ]);
        }

        Pregunta::create([
            'pregunta' => 'Actividad a la que se dedica actualmente:',
            'categoria_id' => 2,
        ]);
        Pregunta::create([
            'pregunta' => 'Si estudia indicar si es: ',
            'categoria_id' => 2,
            'parent_id' => 7
        ]);
        $nombresCat2 = [
            'En caso de trabajar: Tiempo Transcurrido para obtener el primer empleo ',
            'Medio para Obtener el Empleo',
            'Requisitos de contratación',
            'Idioma que utiliza en su trabajo:',
            'En qué proporción utiliza en el desempeño de sus actividades laborales cada una de las habilidades del idioma extranjero',
            'Antigüedad en el empleo :',
            'Ingreso (salario mínimo diario):',
            'Nivel jerárquico en el trabajo ',
            'Condición de Trabajo',
            'Relación del trabajo con su área de formación: ',
        ];
        for ($i = 0; $i < count($nombresCat2); $i++) {
            Pregunta::create([
                'pregunta' => $nombresCat2[$i],
                'categoria_id' => 2
            ]);
        }



        $nombresCat3 = [
            'Eficiencia para realizar las actividades laborales, en relación con su formación académica ',
            'Cómo califica su formación académica con respecto a su desempeño laboral ',
            'Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional',
            'Aspectos que valora la empresa u organismo para la contratación de egresados: ',
            'Área o Campo de Estudio',
            'Titulación ',
            'Experiencia Laboral/práctica (antes de egresar) ',
            'Competencia Laboral: Habilidad para resolver problemas, capacidad de análisis, habilidad
            para el aprendizaje, creatividad, administración del tiempo, capacidad de negociación,
            ha]ilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc. ',
            'Posicionamiento de la Institución de Egreso ',
            'Conocimiento de Idiomas Extranjeros ',
            'Recomendaciones/ referencias ',
            'Personalidad/ Actitudes',
            'Capacidad de liderazgo',
            'Otros ',
        ];
        for ($i = 0; $i < count($nombresCat3); $i++) {
            if ($i > 3) {
                Pregunta::create([
                    'pregunta' => $nombresCat3[$i],
                    'categoria_id' => 3,
                    'parent_id' => 22
                ]);
            } else {
                Pregunta::create([
                    'pregunta' => $nombresCat3[$i],
                    'categoria_id' => 3,
                ]);
            }
        }

         
        $nombresCat4 = [
            'Le gustaría tomar cursos de actualización',
            'Le gustaría tomar algún Posgrado:',
        ];
        for ($i = 0; $i < count($nombresCat4); $i++) {
            Pregunta::create([
                'pregunta' => $nombresCat4[$i],
                'categoria_id' => 4
            ]);
        }


        $nombresCat5 = [
            'Pertenece a organizaciones sociales: ',
            'Pertenece a organismos de profesionistas:  ',
            'Pertenece a la asociación de egresados:',
        ];
        for ($i = 0; $i < count($nombresCat5); $i++) {
            Pregunta::create([
                'pregunta' => $nombresCat5[$i],
                'categoria_id' => 4
            ]);
        } 
    }
}
