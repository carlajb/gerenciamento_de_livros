@extends('layouts.app')
@section('title', 'Criação')

@section('content')

<div class="container mt-5">
    <h1>Adicione um novo Livro</h1>
    <hr>

    <form action="{{ route('gerenciamento-store') }}" method="POST" id="livro-form">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite um título...">
        </div>
        <br>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" name="descricao" placeholder="Digite uma descrição">
        </div>
        <br>

        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
        </div>
        <br>

        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" class="form-control" name="quantidade" placeholder="Digite a quantidade">
        </div>
        <br>

        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" class="form-control" name="preco" placeholder="Preço">
        </div>
        <br>

        <div class="form-group">
            <label for="estoque">Estoque:</label>
            <input type="number" class="form-control" name="estoque" placeholder="Estoque">
        </div>
        <br>

        <div class="form-group">
            <label for="autor_biografia">Autor Biografia:</label>
            <input type="text" class="form-control" id="autor_biografia" name="autor_biografia" placeholder="Autor biografia">
        </div>
        <br>

        <div class="form-group">
            <label for="autor_nacionalidade">Autor Nacionalidade:</label>
            <input type="text" class="form-control" id="autor_nacionalidade" name="autor_nacionalidade" placeholder="Autor nacionalidade">
        </div>
        <br>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
        </div>
    </form>
</div>

<script>
  document.getElementById('titulo').addEventListener('input', function () {
      let titulo = this.value;

      if (titulo.length > 3) { 
          fetch(`https://openlibrary.org/search.json?title=${titulo}`)
              .then(response => response.json())
              .then(data => {
                  if (data.docs && data.docs.length > 0) {
                      let livroInfo = data.docs[0];  

                      document.getElementById('autor').value = livroInfo.author_name ? livroInfo.author_name[0] : 'Autor desconhecido';
                      document.getElementById('autor_biografia').value = livroInfo.subject_facet ? livroInfo.subject_facet.join(', ') : 'Biografia não disponível';
                      document.getElementById('autor_nacionalidade').value = livroInfo.place ? livroInfo.place.join(', ') :
                      (livroInfo.publish_place ? livroInfo.publish_place.join(', ') : 'Nacionalidade não disponível');

                  } else {
                      document.getElementById('autor').value = 'Informação não encontrada';
                      document.getElementById('autor_biografia').value = 'Informação não encontrada';
                      document.getElementById('autor_nacionalidade').value = 'Informação não encontrada';
                  }
              })
              .catch(error => {
                  console.log('Erro ao buscar livro:', error);
              });
      }
  });
</script>

@endsection
