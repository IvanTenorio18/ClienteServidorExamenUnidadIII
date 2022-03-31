<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\romainfo;
use routes\web;
class vistacontroller extends Controller
{
    function index(){
        $romainfos = romainfo::all();
        $informacion=[];
        foreach($romainfos as $romainfos){
            $informacion[]=[
                'nombre'=>$romainfos->nombre,
                'informacion'=>$romainfos->informacion,
                'imagen'=>$romainfos->imagen,
            ];
        }
        return view('vista.index',['informacion'=>$informacion]);
    }

    
}
