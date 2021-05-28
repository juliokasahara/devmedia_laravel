@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Clientes</a></li>
                        <li class="breadcrumb-item active">Adicionar</li>
                    </ol>
                </nav>

                <div class="card-body">

                    <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $cliente->nome }}"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ $cliente->email }}"/>
                        </div>

                        <div class="form-group">
                            <label for="endereco">Endereco</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço" value="{{ $cliente->endereco }}"/>
                        </div>

                        <button class="btn btn-info">Adicionar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection