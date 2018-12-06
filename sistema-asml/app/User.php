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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nameUser', 'apellidoPaterno', 'apellidoMaterno', 'rol_id', 'modulo_oc', 'modulo_ot', 'modulo_nc', 'vigente'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
