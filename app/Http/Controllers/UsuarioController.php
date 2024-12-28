<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuarioFormRequest;

class UsuarioController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function index(Request $request){

        $pesquisar = $request->pesquisar;
        $findUsuario = $this->user->getUsuariosPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.usuario.paginacao', compact('findUsuario'));

    }

    public function delete(Request $request)
    {
        //dd($request->all());
        $id = $request->id;
        $buscarRegistro = $this->user->find($id);
        $buscarRegistro->delete();
        return response()->json(['success' => true]);
    }

    public function criarUsuario(UsuarioFormRequest $request){

        if($request->method() == 'POST'){

            $data = $request->all();
            $this->user->create($data);
            toastr()->success('Usuario criado com sucesso', 'Sucesso');
            return redirect()->route('usuario.index');
        }
        return view('pages.usuario.create');
    }

    public function atualizarUsuario(UsuarioFormRequest $request,$id){
        if($request->method() == 'PUT'){
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            $buscarRegistro = User::find($id);
            $buscarRegistro->update($data);
            return redirect()->route('usuario.index');
        }
        $findUsuario = User::where('id','=',$id)->first();
        return view('pages.usuario.atualiza',compact('findUsuario'));
    }
}
