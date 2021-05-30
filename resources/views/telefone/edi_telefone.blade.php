@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Clientes</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('cliente.detalhe',$tel->cliente->id) }}">Cliente detalhe</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </nav>

                <div class="card-body">

                    <p><b>Cliente: </b>{{$tel->cliente->nome}}</p>

                    <form action="{{ route('telefone.atualizar', $tel->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ $tel->titulo }}"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="number" name="telefone" class="form-control" placeholder="Telefone" value="{{ $tel->telefone }}"/>
                        </div>

                        <button class="btn btn-info">Atualizar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection