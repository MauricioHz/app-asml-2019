<?php

namespace App\Models\Compra;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    // Valor para cada campo nivel de autorizacion
    const PENDIENTE = 0;
    const APROBADO = 1;
    const RECHAZADO = 2;
    const RECEPCIONADO = 3;
    
    // Valor para campo leido
    const NO_LEIDO = 0;
    const LEIDO = 1;

    // Valor para el campo vigente
    const VIGENTE = 1;
    const NO_VIGENTE = 0;

}
