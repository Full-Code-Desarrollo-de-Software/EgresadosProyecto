<?php

namespace App\Models\repository;

use App\Models\Encuesta;

class EncuestaRepository extends Repository
{
    function __construct(Encuesta $encuesta)
    {
        parent::__construct($encuesta);
    }
}