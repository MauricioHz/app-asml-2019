<?php

namespace App\Models\Compra;
use Illuminate\Support\Collection as Collection;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'compra_proveedor';

    protected $fillable = [
        'id',
        'rut',
        'razon_social',
        'nombre_comercial',
        'direccion',
        'ciudad',
        'comuna',
        'giro',
        'fono',
        'fax',
        'emailSii',
        'contacto',
        'emailContacto',
        'sitioWeb'
                ];

    public function getComunas(){
        $var = array('comunas' => array('colina', 'lampa','tiltil'));
        
        return  $collection = collect($var); //$collection = Collection::make((object)$var);
    }            

}
