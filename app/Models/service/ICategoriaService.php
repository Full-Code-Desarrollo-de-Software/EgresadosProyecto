<?php

namespace App\Models\service;

interface ICategoriaService
{
    public function getDataTableCatagories();
    public function categoryStore($request);
    public function categoryFindOrError($id);
    public function categoryUpdate($request, $id);
    public function categoryDelete($id);
}