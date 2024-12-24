<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class ProdutoController extends Controller
{
    public function index(){

        $findProdutos = Produto::all();

        return view('pages.produtos.paginacao', compact('findProdutos'));

    }
}

