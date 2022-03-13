@extends('layouts.includes.header')

@section('titulo', 'Configuração')

@section('conteudo')
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0">
            @include('layouts.components.nav-bar')
        </div>
    </div>

    <div class="row p-0 m-0">
        <div class="col-2 p-0 m-0">
            @include('layouts.components.nav')
        </div>

        <div class="col-10 p-0 m-0">

            <div class="container-fluid content-home">
                <div class="title-list">
                    <h5 class="my-5">Alterar / Configuração...</h5>
                </div>
                @if (session('mensagem'))
                    <div class="alert alert-success">
                        <p>{{ session('mensagem') }}</p>
                    </div>
                @endif
                <div class="row p-0 m-0">

                    <div class="col-12 p-0 m-0">

                        <div class="table">

                            <form class="" enctype="multipart/form-data" action="" method="post">
                                @csrf
                                {{-- <input type="hidden" name="_method" value="put"> --}}
                                @include('layouts.components._formedit')

                                <div class="col-12 d-flex justify-content-center">
                                    <button class="btn btn-primary">Salvar Atualização</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="row p-0 m-0">
            <div class="card-deck">
                @foreach ($lists as $list)
                    <div class="card">
                        <img src="{{ asset($list->imagem) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $list->nome }}</h5>
                            <p class="card-text">{{$list->sobrenome}}</p>
                            <p class="card-text">{{$list->cpf}}</p>
                            <p class="card-text">{{$list->email}}</p>
                            <p class="card-text">{{$list->telefone}}</p>
                            <p class="card-text">{{$list->adress}}</p>
                            <p class="card-text">{{$list->rua}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 p-0 m-0 paginate-center mt-4">
                {{$lists->links()}}
            </div>
        </div> --}}
            </div>
        </div>


    @endsection
