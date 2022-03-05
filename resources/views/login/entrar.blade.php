@extends('layouts.includes.header')

@section('titulo', 'Cursos')

@section('conteudo')

    @include('layouts.components.nav-bar')

    @include('layouts.components.nav')

    <div class="container-fluid content-login">
        <div class="title-list">
            <h5 class="mt-5">Login</h5>
        </div>

        <div class="row p-0 m-0">

            {{-- <div class="col-12 d-flex justify-content-end">
                <a class="btn btn-primary mb-3" href="{{ route('admin.cursos.adicionar') }}">Criar Registros</a>
            </div> --}}

            <div class="col-12 p-0 m-0">

                <div class="table">

                    <form class="" action="{{ route('welcome.login.entrar') }}"
                        method="post">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>

                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn btn-primary">Entrar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
