<?php

namespace App\Http\Controllers;

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

    public function index()
    {
        $clientes = \App\Models\Cliente::paginate(5);

        // Dispatch::where('user_id', Auth::id())->paginate(10);
 
         return view('cliente.list_cliente',compact('clientes'));

    }

    public function adicionar()
    {
        return view('cliente.add_cliente');
    }

    public function save(Request $request)
    {
        \App\Models\Cliente::create($request->all());

        Session::flash('status', 'Salvo com sucesso!'); 

        return redirect()->action([ClienteController::class, 'index']);
    }
}
