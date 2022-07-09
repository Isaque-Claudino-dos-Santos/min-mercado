<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::controller(ProdutosController::class)->group(function () {
    Route::get('/produtos', 'index')->name('produtos.index');
    Route::get('/produtos/create', 'create')->name('produtos.create');
    Route::post('/produtos', 'store')->name('produtos.store');
});
