@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Clientes</li>
                </ol>

                <div class="card-body">

                    <p>
                        <a class="btn btn-primary" href="{{ route('cliente.adicionar') }}">Adicionar</a>
                    </p>


                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">
                                Grupo(s)
                            </th>
                            <th scope="col">
                                Ação
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($clientes as $cliente)
                          <tr>
                            <th scope="row">
                                {{ $cliente->nome }}
                            </th>
                            <th scope="row">
                              {{--   <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-success">Time</button>
                                    <a type="button" class="btn btn-outline-warning" href="{{ route('cliente.editar',$cliente->id) }}" >Editar</a>
                                    <a type="button" class="btn btn-outline-danger" 
                                    onclick="return (confirm('Deletar esse registro?') ? window.location.href='{{ route('cliente.deletar',$cliente->id) }}' : false)">Excluir</a>
                                </div> --}}
                            </th>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>

                    <div class="center">
                        {!! $clientes->links() !!}
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
@endsection