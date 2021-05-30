<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{

    
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
/*      $user = $request->user();
        
        $clientes = \App\Models\Cliente::where('id', '=', $user->id)->paginate(5); */
        
        $clientes = \App\Models\Cliente::paginate(5);

         return view('cliente.list_cliente',compact('clientes'));

    }

    public function adicionar()
    {
        return view('cliente.add_cliente');
    }

    public function salvar(ClienteRequest $request)
    {

        \App\Models\Cliente::create($request->all());

        Session::flash('status', 'Salvo com sucesso!');

        return redirect()->action([ClienteController::class, 'index']);
    }

    public function editar($id,Request $request)
    {
        $cliente = \App\Models\Cliente::find($id);
        if (!$cliente) {
            Session::flash('custon-error', 'não existe esse cliente!'); 

            return redirect()->action([ClienteController::class, 'adicionar']);
        }

        return view('cliente.edi_cliente',compact('cliente'));
    }

    public function atualizar(Request $request,$id)
    {
        \App\Models\Cliente::find($id)->update($request->all());

        Session::flash('status', 'Atualizado com sucesso!'); 

        return redirect()->action([ClienteController::class, 'index']);
    }

    public function deleter($id)
    {
        $cliente = \App\Models\Cliente::find($id);
        $cliente->delete();

        Session::flash('status', 'Grupo deletado com sucesso!'); 

        return redirect()->action([ClienteController::class, 'index']);
    }

    public function detalhe($id)
    {
        $cliente = \App\Models\Cliente::find($id);
        return view('cliente.list_cliente_detalhe',compact('cliente'));
    }

}
