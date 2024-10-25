<?php
use App\Http\Controllers\gerenciamentoController;
use Illuminate\Support\Facades\Route;


    Route::get('/', [gerenciamentoController::class, 'index'])->name('gerenciamento-index');
    Route::get('/create',[gerenciamentoController::class, 'create'])->name('gerenciamento-create');
    Route::post('/',[gerenciamentoController::class, 'store'])->name('gerenciamento-store');
    Route::get('/{id}/edit',[gerenciamentoController::class, 'edit'])->where('id', '[0-9]+')->name('gerenciamento-edit');
    Route::put('/{id}',[gerenciamentoController::class, 'update'])->where('id', '[0-9]+')->name('gerenciamento-update');
    Route::delete('/{id}',[gerenciamentoController::class, 'destroy'])->where('id', '[0-9]+')->name('gerenciamento-destroy');


Route::fallback(function(){
    return "Erro ao localizar a rota.";
});