<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use routes\web;

class apivistacontroller extends Controller
{
    public function getApi(){
        $cliente=new \GuzzleHttp\Client();
        $response=$cliente->request('GET','https://pokeapi.co/api/v2/pokemon?limit=100&offset=200');
        $pokemons=json_decode($response->getBody()->getContents(),true);
        //echo json_encode($pokemons);

        return view('vista.pokemon', ['pokemons' => compact('pokemons')]);   
    }
}
