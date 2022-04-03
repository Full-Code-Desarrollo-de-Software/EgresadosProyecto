<?php

namespace App\Models\service;

use Illuminate\Http\Request;


interface IEncuestaService
{
    public function getCategoriesToEncuesta();
    public function getCategoriesToShow($year);
    public function storeEncuesta(Request $request);
    public function getEncuestasByUserAuth();

}