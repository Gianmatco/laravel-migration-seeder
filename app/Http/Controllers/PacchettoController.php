<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pacchetto;

class PacchettoController extends Controller
{
    public function index(){
        $pacchetti = Pacchetto::all();
        return view('pacchettiLista',compact('pacchetti')); 

    }
    public function show($id){
        $pacchetto = Pacchetto::finOrFail($id);
        return view('datail',compact('pacchetti'));

    }
}
