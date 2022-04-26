<?php

namespace App\Models\repository;

use App\Models\Categoria;

class CategoriaRepository extends Repository
{
    const QUERY = ['id', 'categoria'];

    function __construct(Categoria $categoria)
    {
        parent::__construct($categoria, self::QUERY);
    }

    public function getPreguntas($id)
    {
        return $this->findOrError($id)->preguntas;
    }
}