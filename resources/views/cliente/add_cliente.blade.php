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

                    {{-- 
                        <form action="{{ route('cliente.salvar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('nome') ? 'has-error' : false }}">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome"/>
                        </div>
                        
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : false }}">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail"/>
                        </div>

                        <div class="form-group {{ $errors->has('endereco') ? 'has-error' : false }}">
                            <label for="endereco">Endereco</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço"/>
                        </div>

                        <button class="btn btn-info">Adicionar</button>

                    </form>
 --}}

                    <form action="{{ route('cliente.salvar') }}" method="post">
                         {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    {{-- else para verde is-valid na classe --}}
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" id="nome">
                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nome') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email"class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="endereco">Endereco</label>
                                    <input type="text" name="endereco"class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" id="endereco">
                                    @if ($errors->has('endereco'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('endereco') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <button class="btn btn-info">Adicionar</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection