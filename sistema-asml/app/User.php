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

    protected $fillable = [
        'name', 'email', 'password', 'nameUser', 'apellidoPaterno', 'apellidoMaterno', 'rol_id', 'modulo_oc', 'modulo_ot', 'modulo_nc', 'vigente'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
