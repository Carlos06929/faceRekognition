<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\DatoPersona;



class DatoPersonaController extends Controller
{
    function apiVerification(Request $request){
        $datos=DatoPersona::where("name",$request->username)->first();
        return $datos;
    }
}
