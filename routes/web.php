<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuarioController;
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


Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

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

Route::prefix('vendas')->group(function(){
    Route::get('/', [VendaController::class, 'index'])->name('vendas.index');
    //criar produto
    Route::get('/criarVenda', [VendaController::class, 'criarVenda'])->name('vendas.crearVenda');
    Route::post('/criarVenda', [VendaController::class, 'criarVenda'])->name('vendas.criarVenda');
    //enviar email
    Route::get('/enviarComprovanteEmail/{id}', [VendaController::class, 'enviarComprovanteEmail'])->name('vendas.enviarComprovanteEmail');
});

Route::prefix('usuario')->group(function(){
    Route::get('/', [UsuarioController::class, 'index'])->name('usuario.index');

    Route::get('/criarUsuario', [UsuarioController::class, 'criarUsuario'])->name('usuario.criarUsuario');
    Route::post('/criarUsuario', [UsuarioController::class, 'criarUsuario'])->name('usuario.criarUsuario');
    //atualizar produto
    Route::get('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('usuario.atualizarUsuario');
    Route::put('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('usuario.atualizarUsuario');
    //delete produto
    Route::delete('/delete/{id}', [UsuarioController::class, 'delete'])->name('usuario.delete');

});


