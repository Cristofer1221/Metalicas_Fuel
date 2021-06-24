<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    //relacion uno a muchos instalacion
    public function instalaciones(){
        return $this ->hasMany('App\Models\Instalacion');
    }

}
