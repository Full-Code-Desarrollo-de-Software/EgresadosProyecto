<?php

namespace App\Models\service;

interface IPreguntaService
{
    public function getDataTablePreguntas($id);
    public function preguntaStore($request);
    public function preguntaFindOrError($id);
    public function preguntaUpdate($request, $id);
    public function preguntaDelete($id);
}