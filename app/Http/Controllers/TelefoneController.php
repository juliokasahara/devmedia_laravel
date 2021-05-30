<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TelefoneRequest;

class TelefoneController extends Controller
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

    public function adicionar($idCliente)
    {
        $cliente = \App\Models\Cliente::find($idCliente);

        return view('telefone.add_telefone',compact('cliente'));
    }

    public function salvar($idCliente,TelefoneRequest $request)
    {

        $telefone = new \App\Models\Telefone;

        $telefone->titulo = $request->input('titulo');
        $telefone->telefone = $request->input('telefone');

        \App\Models\Cliente::find($idCliente)->addTelefone($telefone);
        
        Session::flash('status', 'Salvo com sucesso!'); 

        return redirect()->action([ClienteController::class, 'detalhe'], [$idCliente]);
    }

    public function editar($id,Request $request)
    {
        $tel = \App\Models\Telefone::find($id);
        if (!$tel) {
            Session::flash('custon-error', 'não existe esse cliente!'); 

            return redirect()->action([ClienteController::class, 'detalhe'], [$tel->cliente->id]);
        }

        return view('telefone.edi_telefone',compact('tel'));
    }

    public function atualizar(Request $request,$id)
    {
        $telefone = \App\Models\Telefone::find($id);
        \App\Models\Telefone::find($id)->update($request->all());

        Session::flash('status', 'Atualizado com sucesso!'); 

        return redirect()->action([ClienteController::class, 'detalhe'], [$telefone->cliente->id]);

    }

    public function deleter($id)
    {
        $telefone = \App\Models\Telefone::find($id);
        $tel = \App\Models\Telefone::find($id);
        $tel->delete();

        Session::flash('status', 'Telefone deletado com sucesso!'); 

        return redirect()->action([ClienteController::class, 'detalhe'], [$telefone->cliente->id]);
    }
}
