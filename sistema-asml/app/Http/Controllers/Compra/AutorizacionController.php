<?php

namespace App\Http\Controllers\Compra;
//use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
//use App\Models\Compra\Solicitud;
use Illuminate\Http\Request;
//use App\User;

class AutorizacionController extends Controller
{
    public function solicitudesPorAutorizar(){
        /*
        $user = Auth::user(); // --> obtener rol y usuario.
        if($user->rol == 2 || $user->rol == 3){
            $solicitudes = Solicitud::where('nivel', ($user->rol_id - 1))->all();           
        }else{
            $solicitudes = Solicitud::where('nivel', ($user->rol_id - 1))
                                    ->where('jefatura', $user->nombre)->all();               
        }
        */
        return 1;
    }


    /**
     * Autoriza.
     *
     * @param $solicitudId, $estado
     * @return respuesta JSON
     */
    public function autorizarConfirmado(){ // $solicitudId, $estado
        //$user = Auth::user();
        // Recuperar rol del nivel a autorizar
        // Recuperar solicitud y actualizar segun rol
        // Registrar el tracking usuario, estado, fecha y hora
        // Notificar
        // Respuesta JSON
        
        /* 
        
        "data" : {
            "respuesta" {
                "solicitudId" : "",
                "estado" : "",
                "mensaje" : "" 
            }
        }

        
        $respuesta = new \stdClass();
        $respuesta->solicitudId = 1;
        $respuesta->estado = 1;
        $respuesta->mensaje = 'APROBADO';
        $data['data'] = $respuesta;
        return response()->json($respuesta);
        */
        return 1;
    }

}
