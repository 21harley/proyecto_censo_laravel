<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'clave',
        're_clave',
        'cedula',
        'correo',
        'dire_municipio',
        'dire_localidad',
        'tele_fijo',
        'tele_movil',
        'create_user',
        'url_img',
        'virus'
    ];

    public function sintoma()
    {
      return $this->belongsToMany('App/Models/Sintoma');
    }

    public function notificacion()
    {
      return $this->belongsToMany('App/Models/Notificacion');
    }

}
