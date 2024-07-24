<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
   public function index()
   {
    //  dd('Controller aqui!');
    $nome= 'Fifa';
    $id= 1;
    return view('jogos.index', ['nome'=> $nome, 'id' => $id]);
   }
}
