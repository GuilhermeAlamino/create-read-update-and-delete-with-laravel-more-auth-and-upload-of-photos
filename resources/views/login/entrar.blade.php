@extends('layouts.includes.header')

@section('titulo', 'Login')

@section('conteudo')


    <div class="container">
        <div class="row p-0 m-0">

            <div class="col-12 d-flex align-items-center justify-content-center p-0 m-0">

                <div class="row p-0 m-0 mx-5 no_padding_margim">
                    <div class="col-12 col-lg-8 p-0 m-0">
                        <div class="world px-5 no_padding_margim">
                            <img class="startup" src="{{ asset('login/world.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 p-0 m-0">

                        <div class="row world-two p-0 m-0">

                            <div class="col-12 p-0 m-0">

                                <div class="card_login">

                                    <div class="startup_div">
                                        <img class="startup py-4 px-5" src="{{ asset('login/startup.svg') }}" alt="">
                                    </div>

                                    <div class="no_padding_margim">
                                        <form class="" action="{{ route('welcome.login.entrar') }}"
                                            method="post">
                                            @csrf
                                            <div class="form-group  px-5">
                                                <label class="label label_login py-2"
                                                    for="formGroupExampleInput">E-mail</label>
                                                <input type="email" class="form-control" name="email"
                                                    id="email">
                                            </div>
                                            <div class="form-group  px-5">
                                                <label class="label label_login py-2"
                                                    for="formGroupExampleInput2">Senha</label>
                                                <input type="password" class="form-control" name="senha"
                                                    id="senha">
                                            </div>

                                            <div class="px-5 py-4">
                                                <button class="btn btn-primary button_login">Entrar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
