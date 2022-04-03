<?php

namespace Database\Seeders;

use App\Models\Respuesta;
use Illuminate\Database\Seeder;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $respuestasPreg1_Sec1 = [
            'Muy Buena',
            'Buena',
            'Regular',
            'Mala'
        ];
        for ($i = 0; $i < count($respuestasPreg1_Sec1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_Sec1[$i],
                'pregunta_id' => 1
            ]);
        }

        $respuestasPreg2_sec1 = [
            'Muy Buenos',
            'Buenos',
            'Regulares',
            'Malos'
        ];
        for ($i = 0; $i < count($respuestasPreg2_sec1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg2_sec1[$i],
                'pregunta_id' => 2
            ]);
        }

        $respuestasPreg3_sec1 = [
            'Muy Buena',
            'Buena',
            'Regular',
            'Mala'
        ];
        for ($i = 0; $i < count($respuestasPreg3_sec1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg3_sec1[$i],
                'pregunta_id' => 3
            ]);
        }


        $respuestasPreg4_sec1 = [
            'Muy Buena',
            'Buena',
            'Regular',
            'Mala'
        ];
        for ($i = 0; $i < count($respuestasPreg4_sec1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_sec1[$i],
                'pregunta_id' => 4
            ]);
        }


        $respuestasPreg5_sec1 = [
            'Muy Buena',
            'Buena',
            'Regular',
            'Mala'
        ];
        for ($i = 0; $i < count($respuestasPreg5_sec1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg5_sec1[$i],
                'pregunta_id' => 5
            ]);
        }

        
        $respuestasPreg6_sec1 = [
            'Muy Buena',
            'Buena',
            'Regular',
            'Mala'
        ];
        for ($i = 0; $i < count($respuestasPreg6_sec1); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg6_sec1[$i],
                'pregunta_id' => 6
            ]);
        }
 

        $respuestasPreg1_sec2 = [
            'Trabaja',
            'Estudia',
            'Estudia y Trabaja',
            'No estudia ni trabaja'
        ];
        for ($i = 0; $i < count($respuestasPreg1_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec2[$i],
                'pregunta_id' => 7

            ]);
        }


        $respuestasPreg1_sec2_2 = [
            'Especialidad',
            'Maestria',
            'Doctorado',
            'Idiomas',
            'Otros',
            'Ninguna',
        ];
        for ($i = 0; $i < count($respuestasPreg1_sec2_2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec2_2[$i],
                'pregunta_id' => 8
            ]);
        }


        $respuestasPreg2_sec2_2 = [
            'Antes de Egresar',
            'Menos de seis meses',
            'Entre seis meses y año',
            'Más de un año',
            
        ];        
        for ($i = 0; $i < count($respuestasPreg1_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec2[$i],
                'pregunta_id' => 9
            ]);
        }


        $respuestasPreg3_sec2 = [
            'Bolsa de trabajo del plantel',
            'Contactos personales',
            'Recidencia profecional',
            'Medios masivos comunicacion',
            'Otros',
        ];        
        for ($i = 0; $i < count($respuestasPreg3_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg3_sec2[$i],
                'pregunta_id' => 10
            ]);
        }


        $respuestasPreg4_sec2 = [
            'Competecnias laborales',
            'Titulo profesional',
            'Examen de seleccion',
            'Idioma extranjero',
            'Actitudes y habilidades socio-comunicativas (principios y valores)',
            'Ninguno',
            'Otros',
        ];
        for ($i = 0; $i < count($respuestasPreg4_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_sec2[$i],
                'pregunta_id' => 11
            ]);
        }


        $respuestasPreg5_sec2 = [
            'Ingles',
            'Frances',
            'Aleman',
            'Japones',
            'Otros',
        ];
        for ($i = 0; $i < count($respuestasPreg5_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg5_sec2[$i],
                'pregunta_id' => 12
            ]);
        }


        $respuestasPreg6_sec2 = [
            'Hablar',
            'Escribir',
            'Leer',
            'Escuchar',
        ];
        for ($i = 0; $i < count($respuestasPreg6_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg6_sec2[$i],
                'pregunta_id' => 13
            ]);
        }


        $respuestasPreg7_sec2 = [
            'Menos de un año',
            'Un año',
            'Dos años',
            'Tres años',
            'Más de tres años',
        ];
        for ($i = 0; $i < count($respuestasPreg7_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg7_sec2[$i],
                'pregunta_id' => 14
            ]);
        }


        $respuestasPreg8_sec2 = [
            'Menos de cinco',
            'Entre cinco y siete',
            'Entre 8 y 10 ',
            'Más de 10',
        ];
        for ($i = 0; $i < count($respuestasPreg8_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg8_sec2[$i],
                'pregunta_id' => 15
            ]);
        }


        $respuestasPreg9_sec2 = [
            'Técnico',
            'Supervisor',
            'Jefe de área',
            'Funcionario ',
            'Directivo',
            'Empresario',
        ];
        for ($i = 0; $i < count($respuestasPreg9_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg9_sec2[$i],
                'pregunta_id' => 16
            ]);
        }


        $respuestasPreg10_sec2 = [
            'Base',
            'Eventual',
            'Contrato',
            'Otros ',
        ];
        for ($i = 0; $i < count($respuestasPreg10_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg10_sec2[$i],
                'pregunta_id' => 17
            ]);
        }


        $respuestasPreg11_sec2 = [
            '0%',
            '20%',
            '40%',
            '60%',
            '80%',
            '100%',

        ];
        for ($i = 0; $i < count($respuestasPreg11_sec2); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg11_sec2[$i],
                'pregunta_id' => 18
            ]);
        }

        $respuestasPreg1_sec3 = [
            'Muy eficiente',
            'Eficiente',
            'Poco eficiente',
            'Deficiente',
        ];
        for ($i = 0; $i < count($respuestasPreg1_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec3[$i],
                'pregunta_id' => 19
            ]);
        }


        $respuestasPreg2_sec3 = [
            'Excelente',
            'Bueno',
            'Regular',
            'Malo',
            'Pésimo',
        ]; 
        for ($i = 0; $i < count($respuestasPreg2_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg2_sec3[$i],
                'pregunta_id' => 20
            ]);
        }

        
        $respuestasPreg3_sec3 = [
            'Excelente',
            'Bueno',
            'Regular',
            'Malo',
            'Pésimo',
        ]; 
        for ($i = 0; $i < count($respuestasPreg3_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg3_sec3[$i],
                'pregunta_id' => 21
            ]);
        }


        $respuestasPreg4_subp1_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp1_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp1_sec3[$i],
                'pregunta_id' => 23
            ]);
        }
        
        
        $respuestasPreg4_subp2_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp2_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp2_sec3[$i],
                'pregunta_id' => 24
            ]);
        } 

        $respuestasPreg4_subp3_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp3_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp3_sec3[$i],
                'pregunta_id' => 25
            ]);
        }
        
        
        $respuestasPreg4_subp4_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp4_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp4_sec3[$i],
                'pregunta_id' => 26
            ]);
        } 

        $respuestasPreg4_subp5_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp5_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp5_sec3[$i],
                'pregunta_id' => 27
            ]);
        }
        
        
        $respuestasPreg4_subp6_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp6_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp6_sec3[$i],
                'pregunta_id' => 28
            ]);
        } 

        $respuestasPreg4_subp7_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp7_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp7_sec3[$i],
                'pregunta_id' => 29
            ]);
        }
        
        
        $respuestasPreg4_subp8_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp8_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp8_sec3[$i],
                'pregunta_id' => 30
            ]);
        } 

        $respuestasPreg4_subp9_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp9_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp9_sec3[$i],
                'pregunta_id' => 31
            ]);
        }
        
        
        $respuestasPreg4_subp10_sec3 = [
            'Muy Poco',
            'Poco',
            'Regular',
            'Bastante',
            'Mucho',
        ]; 
        for ($i = 0; $i < count($respuestasPreg4_subp10_sec3); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg4_subp10_sec3[$i],
                'pregunta_id' => 32
            ]);
        } 


        $respuestasPreg1_sec4 = [
            'Si',
            'No',
        ]; 
        for ($i = 0; $i < count($respuestasPreg1_sec4); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec4[$i],
                'pregunta_id' => 33
            ]);
        } 


        $respuestasPreg2_sec4 = [
            'Si',
            'No',
        ]; 
        for ($i = 0; $i < count($respuestasPreg2_sec4); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg2_sec4[$i],
                'pregunta_id' => 34
            ]);
        } 


        $respuestasPreg1_sec5 = [
            'Si',
            'No',
        ]; 
        for ($i = 0; $i < count($respuestasPreg1_sec5); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg1_sec5[$i],
                'pregunta_id' => 35
            ]);
        } 


        $respuestasPreg2_sec5 = [
            'Si',
            'No',
        ]; 
        for ($i = 0; $i < count($respuestasPreg2_sec5); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg2_sec5[$i],
                'pregunta_id' => 36
            ]);
        }


        $respuestasPreg3_sec5 = [
            'Si',
            'No',
        ]; 
        for ($i = 0; $i < count($respuestasPreg3_sec5); $i++) {
            Respuesta::create([
                'respuesta' => $respuestasPreg3_sec5[$i],
                'pregunta_id' => 37
            ]);
        }
    }
}

