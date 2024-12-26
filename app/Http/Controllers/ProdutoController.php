<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Requests\FormRequestProduto;
use App\Models\Componentes;

class ProdutoController extends Controller
{
    private $produto;
    private $componentes;

    public function __construct(Produto $produto, Componentes $componentes){
        $this->produto = $produto;
        $this->componentes = $componentes;
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

    public function criarProduto(FormRequestProduto $request){

        if($request->method() == 'POST'){
            $data = $request->all();
            $data['preco'] = $this->componentes->formatacaoMascaraDinheiroDecimal($data['preco']);
            $this->produto->create($data);

            toastr()->success('Produto criado com sucesso', 'Sucesso');
            return redirect()->route('produto.index');
        }
        echo 'caio aqui 2';
        return view('pages.produtos.create');
    }

    public function atualizarProduto(FormRequestProduto $request,$id){
        if($request->method() == 'PUT'){
            $data = $request->all();
            $data['preco'] = $this->componentes->formatacaoMascaraDinheiroDecimal($data['preco']);

            $buscarRegistro = Produto::find($id);
            $buscarRegistro->update($data);
            return redirect()->route('produto.index');
        }
        $findProduto = Produto::where('id','=',$id)->first();
        return view('pages.produtos.atualiza',compact('findProduto'));
    }


}

