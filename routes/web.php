<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('produto')->group(function(){
    Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');
    //criar produto
    Route::get('/criarProduto', [ProdutoController::class, 'criarProduto'])->name('produto.crearProduto');
    Route::post('/criarProduto', [ProdutoController::class, 'criarProduto'])->name('produto.criarProduto');
    //atualizar produto
    Route::get('/atualizarProduto/{id}', [ProdutoController::class, 'atualizarProduto'])->name('produto.atualizarProduto');
    Route::put('/atualizarProduto/{id}', [ProdutoController::class, 'atualizarProduto'])->name('produto.atualizarProduto');
    //delete produto
    Route::delete('/delete/{id}', [ProdutoController::class, 'delete'])->name('produto.delete');
});
