<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EgresadoRespuesta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    use HasFactory;
    protected $table = 'egresado_respuesta';
    
    //scopes 
    public function scopeYear($query, $año) //Variable $query obligatoria
    {
        if ($año) {
            return $query->whereYear('egresado_respuesta.created_at', $año);
        }
    }
}
