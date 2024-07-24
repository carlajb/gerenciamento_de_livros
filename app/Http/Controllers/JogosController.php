<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{

public function index()
{
   $jogos = Jogo::all();
   // Suponha que você queira passar a lista de jogos para a view
   return view('jogos.index', ['jogos' => $jogos]);
}
}