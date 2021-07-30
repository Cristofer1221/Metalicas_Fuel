<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function instalaciones(){
        return $this->belongsTo('App\Models\Instalacion','instalaciones_id');
    }

}
