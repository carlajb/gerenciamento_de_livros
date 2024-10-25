<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gerenciamento', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->string('descricao', 55);
            $table->string('autor', 55);
            $table->string('quantidade', 100);
            $table->decimal('preco', 8, 2); 
            $table->integer('estoque');
            $table->text('autor_biografia');
            $table->string('autor_nacionalidade', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gerenciamento');
    }
};
