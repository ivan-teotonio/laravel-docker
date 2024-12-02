<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
   private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(Request $request)
    {
        $pesquisa = $request->pesquisar;
        $findProdutos = $this->produto->getProdutosPesquisarIndex(search: $pesquisa ?? null);
        return view('pages.produtos.paginacao', compact('findProdutos',));
    }

    public function delete(Request $request)
    {
    prei na aula 30
    }
}
