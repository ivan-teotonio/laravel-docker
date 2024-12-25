<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto){
        $this->produto = $produto;
    }

    public function index(Request $request){

        $pesquisar = $request->pesquisar;
        $findProdutos = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.produtos.paginacao', compact('findProdutos'));

    }

    public function delete(Request $request)
    {
        //dd($request->all());
        $id = $request->id;
        $buscarRegistro = $this->produto->find($id);
        $buscarRegistro->delete();
        return response()->json(['success' => true]);
    }
}

