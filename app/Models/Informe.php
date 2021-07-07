<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    public function instalacions(){
        return $this->belongsTo('App\Models\Instalacion','instalaciones_id');
    }
}
