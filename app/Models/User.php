<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cedula',
        'nacimiento',
        'estadocivil',
        'direccion',
        'telefono',
        'celular',
        'especializacion',
        'jornada',
        'genero',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //relacion uno a muchos
    // public function fechas(){
    //     return $this->hasMany('App\Models\Fecha');
    // }

    public function asistencias(){
        return $this->hasMany('App\Models\Asistencia');
    }

    public function instalaciones(){
        return $this->hasMany('App\Models\Instalacion');
    }




    //mostrar la imagen en adminlte de usuarios
    public function adminlte_image(){

        return auth()->user()->profile_photo_url;
    }


    //mostrar la informacion del rol o descripcion del usuario
    // public function adminlte_desc(){
    //     return ;
    // }

    //sirve para redireccionar al perfil del usuario
    public function adminlte_profile_url()
    {
        return 'user/profile';
    }

}
