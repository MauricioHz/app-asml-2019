<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const SOLICITANTE = 1;
    const JEFATURA = '2';
    const FINANZAS = '3';
    const GERENCIA = '4';

    const VIGENTE = '1';

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getNameUserAttribute($value)
    {
        return ucwords($value);
    }

    public function getApellidoPaternoAttribute($value)
    {
        return ucwords($value);
    }

    public function getApellidoMaternoAttribute($value)
    {
        return ucwords($value);
    }

    protected $fillable = [
        'name', 'email', 'password', 'nameUser', 'apellidoPaterno', 'apellidoMaterno', 'rol_id', 'modulo_oc', 'modulo_ot', 'modulo_nc', 'vigente'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeActive($consulta){
        return $consulta->where('rol_id', self::JEFATURA);
    }

}
