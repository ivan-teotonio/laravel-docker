<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Venda;
use App\Models\User;
class DashboardController extends Controller
{
    public function index()
    {
        $totalDeProdutosCadastrados = $this->buscaTotalDeRegistros(Produto::class);
        $totalDeClientesCadastrados = $this->buscaTotalDeRegistros(Cliente::class);
        $totalDeVendasRealizadas = $this->buscaTotalDeRegistros(Venda::class);
        $totalDeUsuariosCadastrados = $this->buscaTotalDeRegistros(User::class);

        return view('pages.dashboard.dashboard', compact('totalDeProdutosCadastrados',
        'totalDeClientesCadastrados', 'totalDeVendasRealizadas', 'totalDeUsuariosCadastrados'));
    }

    private function buscaTotalDeRegistros(string $modelClass)
    {
        return $modelClass::count();
    }

    // private function buscaTotalDeProdutosCadastrados()
    // {
    //     $findProduto = Produto::all();
    //     return $findProduto->count();
    // }

    // private function buscaTotalDeClientesCadastrados()
    // {
    //     $findCliente = Cliente::all();
    //     return $findCliente->count();
    // }

    // private function buscaTotalDeVendasRealizadas()
    // {
    //     $findVenda = Venda::all();
    //     return $findVenda->count();
    // }
}
