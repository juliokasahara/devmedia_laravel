@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Clientes</a></li>
                    <li class="breadcrumb-item active">Detalhe</li>
                </ol>

                <div class="card-body">

                    <p><b>Cliente: </b>{{$cliente->nome}}</p>
                    <p><b>E-mail: </b>{{$cliente->email}}</p>
                    <p><b>Endereço: </b>{{$cliente->endereco}}</p>

                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">
                                ID
                            </th>
                            <th scope="col">
                                Título
                            </th>
                            <th scope="col">
                                Número
                            </th>
                            <th scope="col">
                                Ação
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente->telefones as $telefone)

                            <tr>
                                <th scope="row">
                                    {{ $telefone->id }}
                                </th>
                                <th scope="row">
                                    {{ $telefone->titulo }}
                                </th>
                                <th scope="row">
                                    {{ $telefone->telefone }}
                                </th>
                                <th scope="row">
                                   <div class="btn-group" role="group">
    
                                        <a type="button" class="btn btn-outline-warning" href="{{ route('telefone.editar',$telefone->id) }}" >Editar</a>
                                        <a type="button" class="btn btn-outline-danger" onclick="return (confirm('Deletar esse registro?') ? window.location.href='{{ route('telefone.deletar',$telefone->id) }}' : false)">Excluir</a>
                                        
                                    </div>
                                </th>
                              </tr>
                                
                            @endforeach                     
                        </tbody>
                    </table>
                   
                    <p>
                        <a class="btn btn-primary" href="{{ route('telefone.adicionar' ,$cliente->id) }}">Adicionar Telefone</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection