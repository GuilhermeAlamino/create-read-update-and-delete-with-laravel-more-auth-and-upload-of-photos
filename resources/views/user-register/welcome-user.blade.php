@extends('layouts.includes.header')

@section('titulo', 'Lista Usúario')

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


                <div class="row p-0 m-0">
                    <div class="col-4">
                        <div class="card-teste">
                            teste
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-teste">
                            teste
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-teste">
                            teste
                        </div>
                    </div>
                </div>
                {{-- <div class="title-list">
                    <h5 class="my-5">Lista de Usúarios Registrados</h5>
                </div>
        
                <div class="row p-0 m-0">
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
                                 <div class="card-footer">
                                    <small class="text-muted">{{$list->valor}}</small>
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

    </div>



@endsection
