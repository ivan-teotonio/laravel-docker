<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
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

Route::prefix('clientes')->group(function(){
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    //criar produto
    Route::get('/criarCliente', [ClienteController::class, 'criarCliente'])->name('clientes.crearCliente');
    Route::post('/criarCliente', [ClienteController::class, 'criarCliente'])->name('clientes.criarCliente');
    //atualizar produto
    Route::get('/atualizarCliente/{id}', [ClienteController::class, 'atualizarCliente'])->name('clientes.atualizarCliente');
    Route::put('/atualizarCliente/{id}', [ClienteController::class, 'atualizarCliente'])->name('clientes.atualizarCliente');
    //delete produto
    Route::delete('/delete/{id}', [ClienteController::class, 'delete'])->name('clientes.delete');
});
