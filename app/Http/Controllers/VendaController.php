<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Componentes;
use App\Http\Requests\FormRequestVenda;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComprovanteDeVendaEmail;

class VendaController extends Controller
{
    private $venda;
    private $componentes;

    public function __construct(Venda $venda, Componentes $componentes){
        $this->venda = $venda;
        $this->componentes = $componentes;
    }

    public function index(Request $request){

        $pesquisar = $request->pesquisar;
        $findVendas = $this->venda->getVendasPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.vendas.paginacao', compact('findVendas'));

    }


    public function criarVenda(FormRequestVenda $request){

        $findNumeracao = Venda::max('numero_da_venda') + 1;
        $clientes = Cliente::all();
        $produtos = Produto::all();

        if($request->method() == 'POST'){
            $data = $request->all();
            $data['numero_da_venda'] = $findNumeracao;
            $this->venda->create($data);

            toastr()->success('Venda criada com sucesso', 'Sucesso');
            return redirect()->route('vendas.index');
        }

        return view('pages.vendas.create', compact('findNumeracao', 'clientes', 'produtos'));
    }

    public function enviarComprovanteEmail($id)
    {
       $buscaVenda = Venda::where('id', $id)->first();
       $produtoNome = $buscaVenda->produto->nome;
       $clienteEmail = $buscaVenda->cliente->email;
       $clienteNome = $buscaVenda->cliente->nome;
       $emailData = [
        'produtoNome' => $produtoNome,
        'clienteEmail' => $clienteEmail,
        'clienteNome' => $clienteNome,
       ];
       Mail::to($clienteEmail)->send(new ComprovanteDeVendaEmail($emailData));
       toastr()->success('Email enviado com sucesso', 'Sucesso');
       return redirect()->route('vendas.index');
    }
}

