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
                <div class="row p-0 m-0">

                    <div class="col-12 p-0 m-0">

                        <div class="table">

                            <form class="" enctype="multipart/form-data" action="" method="post">
                                @csrf
                                @include('layouts.components._formedit')

                                @if (session('mensagem'))
                                    <div class="alert alert-success">
                                        <h6 class="text-center">{{ session('mensagem') }}</h6>
                                    </div>
                                @endif

                                <div class="col-12 d-flex justify-content-center">
                                    <button class="btn btn-primary">Salvar Atualização</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
