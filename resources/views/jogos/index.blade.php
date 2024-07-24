{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> Testando Routes com views </h1>
  <p>id: {{ $id }}</p>
  <p>nome: {{ $nome }}</p>
  <p>Id dojogo:{{$idJogo}}</p>
  <p>Nome do jogo:{{ $nomeJogo }}</p>

  <a href="{{ route('home-index') }}"> Clique aqui</a>
</body>
</html> --}}

@extends('layouts.app')
@section('title', 'Listagem')

@section('content')
{{-- tudo que for criado aqui dentro sera renderizado no template  --}}
<h1>TESTE</h1>
@endsection