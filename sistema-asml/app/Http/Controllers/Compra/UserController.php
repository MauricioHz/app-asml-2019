<?php

namespace App\Http\Controllers\Compra;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Compra\DB;

class UserController extends Controller
{
    public function getJefatura(){        
        //return view()->with('jefatura', );
        $data['data'] = User::active()->get();
 
        return response()->json($data);
    }
}
