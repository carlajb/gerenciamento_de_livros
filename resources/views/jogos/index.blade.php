@extends('layouts.app')
@section('title', 'Listagem')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-10">
      <h1>Listagem de Jogos</h1>
    </div>
    <div class="col-sm-2">
      <a href="{{ route('jogos-create') }}" class="btn btn-success">Novo Jogo</a>
    </div>
  </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ano de criação</th>
            <th scope="col">Valor</th>
          </tr>
        </thead>
            <tbody>
              @foreach ($jogos as $jogo)
              <tr>
                <th scope="row">{{ $jogo->id }}</th>
                <th scope="row">{{ $jogo->nome }}</th>
                <th scope="row">{{ $jogo->categoria }}</th>
                <th scope="row">{{ $jogo->ano_criacao }}</th>
                <th scope="row">{{ $jogo->valor }}</th>
              </tr>
              @endforeach
              
            </tbody>
      </table>
</div>


 @endsection
