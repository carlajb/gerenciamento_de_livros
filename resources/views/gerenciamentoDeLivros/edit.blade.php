@extends('layouts.app')
@section('title', 'Edição')

@section('content')

<div class="container mt-5">
<h1>Editar registro</h1>
<hr>
<form action="{{ route('gerenciamento-update', ['id'=>$gerenciamento->id]) }}" method="POST">
@csrf
@method('PUT')

<div class="form-group"></div>
<div class="form-group">
  <label for="titulo">Título:</label>
  <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $gerenciamento->titulo }}" placeholder="Digite um título...">

</div>
</br>

<div class="form-goup">
  <label for="descricao">Descrição:</label>
  <input type="text" class="form-control" name="descricao" value="{{ $gerenciamento->descricao }}" placeholder="Digite uma descrição">
</div>
</br>

<div class="form-goup">
  <label for="autor">Autor:</label>
  <input type="text" class="form-control" id="autor" name="autor" value="{{ $gerenciamento->autor }}" placeholder="Autor">
</div>
</br>

<div class="form-goup">
  <label for="quantidade">Quantidade:</label>
  <input type="number" class="form-control" name="quantidade" value="{{ $gerenciamento->quantidade }}" placeholder="Digite a quantidade">
</div>
</br>

<div class="form-goup">
  <label for="preco">Preço:</label>
  <input type="number" class="form-control" name="preco" value="{{ $gerenciamento->preco }}" placeholder="Preço">
</div>
</br>

<div class="form-goup">
  <label for="estoque">Estoque:</label>
  <input type="number" class="form-control" name="estoque" value="{{ $gerenciamento->estoque }}" placeholder="Estoque">
</div>
</br>

<div class="form-goup">
<label for="autor_biografia">Autor biografia:</label>
<input type="text" class="form-control" id="autor_biografia" name="autor_biografia" value="{{ $gerenciamento->autor_biografia }}" placeholder="Autor biografia">
</div>
</br>

<div class="form-goup">
<label for="autor_nacionalidade">Autor nacionalidade:</label>
<input type="text" class="form-control" id="autor_nacionalidade" name="autor_nacionalidade" value="{{ $gerenciamento->autor_nacionalidade }}" placeholder="Autor nacionalidade">
</div>
</br>

<div class="form-goup">
  <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
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




</form>

</div> 

  
@endsection