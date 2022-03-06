@extends('layouts.includes.header')

@section('titulo', 'Registro Usúario')

@section('conteudo')

    @include('layouts.components.nav-bar')

    @include('layouts.components.nav')

    <div class="container-fluid content-home">
        <div class="title-list">
            <h5 class="mt-5">Adicionar Registros</h5>
        </div>

        <div class="row p-0 m-0">

            {{-- <div class="col-12 d-flex justify-content-end">
                <a class="btn btn-primary mb-3" href="{{ route('admin.cursos.adicionar') }}">Criar Registros</a>
            </div> --}}

            <div class="col-12 p-0 m-0">

                <div class="table">

                    <form class="" enctype="multipart/form-data" action="{{ route('admin.admin.user.salvar') }}"
                        method="post">
                        @csrf

                        @include('layouts.components._form')

                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary">Salvar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
