<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosEgreso extends Model
{
    protected $guarded = ['id'];

    use HasFactory;
    
    public function egresado (){
        return $this->belongsTo('App\Models\Egresado', 'egresado_id');;
    }
}
