<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Gerenciamento;

class gerenciamentoController extends Controller
{
    public function index(){
        
        $gerenciamentos = Gerenciamento::all();
        return view('gerenciamentoDeLivros.index', ['gerenciamentoDeLivros' => $gerenciamentos]);
    }
    public function create()
{
   return view('gerenciamentoDeLivros.create');
}
public function store(Request $request)
{
   gerenciamento::create($request->all());
   return redirect()->route('gerenciamento-store');

}
public function edit($id)
{
    $gerenciamento = Gerenciamento::where('id', $id)->first();

    if (!empty( $gerenciamento)) {
        return view('gerenciamentoDeLivros.edit', ['gerenciamento' => $gerenciamento]);
    } else {
        return redirect()->route('gerenciamento-index');
    }
}

public function update(Request $request, $id){
   
    $data = [
        'titulo' => $request->titulo,
        'descricao'=> $request->descricao,
       'autor' => $request->autor,
        'quantidade' => $request->quantidade,
        'preco' => $request->preco,
        'estoque' => $request->estoque,
        'autor_biografia' => $request->autor_biografia,
        'autor_nacionalidade' => $request->autor_nacionalidade,
    ];
    Gerenciamento::where('id',$id)->update($data);
    return redirect()->route('gerenciamento-index');
 }
 public function destroy($id){
    Gerenciamento::where('id',$id)->delete();
    return redirect()->route('gerenciamento-index');
 }
}
