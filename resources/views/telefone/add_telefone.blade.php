@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Telefone</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('cliente.detalhe',$cliente->id) }}">Cliente detalhe</a></li>
                        <li class="breadcrumb-item active">Adicionar</li>
                    </ol>
                </nav>

                <div class="card-body">

                    <p><b>Cliente: </b>{{$cliente->nome}}</p>

{{--                     <form action="{{ route('telefone.salvar',$cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Número</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Número"/>
                        </div>

                        <button class="btn btn-info">Adicionar</button>

                    </form> --}}


                    <form action="{{ route('telefone.salvar',$cliente->id) }}" method="post">
                        {{ csrf_field() }}
                       <div class="form-row">
                           <div class="col-md-3 mb-3">
                               <div class="form-group">
                                   {{-- else para verde is-valid na classe --}}
                                   <label for="titulo">Nome</label>
                                   <input type="text" name="titulo" class="form-control {{ $errors->has('titulo') ? 'is-invalid' : '' }}" id="titulo">
                                   @if ($errors->has('titulo'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('titulo') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>
                           <div class="col-md-3 mb-3">
                               <div class="form-group">
                                   <label for="telefone">Telefone</label>
                                   <input type="text" name="telefone"class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }}" id="telefone">
                                   @if ($errors->has('telefone'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('telefone') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>                   
                       </div>
                       <button class="btn btn-info">Adicionar</button>
                   </form>

                </div>
            </div>
        </div>
    </div>
@endsection