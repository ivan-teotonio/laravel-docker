<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Componentes;
use App\Http\Requests\FormRequestClientes;
class ClienteController extends Controller
{
    private $cliente;
    private $componentes;

    public function __construct(Cliente $cliente, Componentes $componentes){
        $this->cliente = $cliente;
        $this->componentes = $componentes;
    }

    public function index(FormRequestClientes $request){

        $pesquisar = $request->pesquisar;
        $findCliente = $this->cliente->getClientesPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.clientes.paginacao', compact('findCliente'));

    }

    public function delete(FormRequestClientes $request)
    {
        //dd($request->all());
        $id = $request->id;
        $buscarRegistro = $this->cliente->find($id);
        $buscarRegistro->delete();
        return response()->json(['success' => true]);
    }

    public function criarCliente(FormRequestClientes $request){

        if($request->method() == 'POST'){
            $data = $request->all();
            $this->cliente->create($data);
            toastr()->success('Cliente criado com sucesso', 'Sucesso');
            return redirect()->route('clientes.index');
        }
        return view('pages.clientes.create');
    }

        public function atualizarCliente(FormRequestClientes $request,$id){
        if($request->method() == 'PUT'){
            $data = $request->all();
            $buscarRegistro = Cliente::find($id);
            $buscarRegistro->update($data);
            return redirect()->route('clientes.index');
        }
        $findCliente = Cliente::where('id','=',$id)->first();
        return view('pages.clientes.atualiza',compact('findCliente'));
    }

}
