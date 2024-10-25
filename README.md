# gerenciamento_de_livros
Este projeto é uma aplicação web para gerenciamento de livros. O objetivo principal é permitir que o usuário adicione, visualize, edite e exclua informações de livros, incluindo o nome do autor, biografia, nacionalidade, quantidade, preço e estoque. Como parte do desafio, a aplicação também integra a API da Open Library para preencher automaticamente as informações de autor, biografia e nacionalidade com base no título do livro fornecido pelo usuário.

1. Clone o repositório:
```bash
git clone https://github.com/carlajb/gerenciamento_de_livros.git
cd gerenciamento_de_livros

composer install
npm install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve

