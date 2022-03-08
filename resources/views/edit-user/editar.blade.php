@extends('layouts.includes.header')

@section('titulo', 'Editar Usúario')

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
                    <h5 class="mt-5">Editar Registros</h5>
                </div>

                <div class="row p-0 m-0">

                    <div class="col-12 p-0 m-0">

                        <div class="table">

                            <form class="" enctype="multipart/form-data"
                                action="{{ route('admin.admin.user.atualizar', $registro->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="put">
                                @include('layouts.components._form')

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
