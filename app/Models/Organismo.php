<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organismo extends Model
{
    use HasFactory;

    public function egresado(){
        return $this->hasOne('App\Models\Egresado', 'egresado_id');
    }
}
