<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos
    public function asistencia(){
        return $this->hasMany('App\Models\Asistencia');
    }


}
