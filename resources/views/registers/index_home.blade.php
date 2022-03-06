@extends('layouts.includes.header')

@section('titulo', 'Registro Usúarios')

@section('conteudo')

    @include('layouts.components.nav-bar')

    @include('layouts.components.nav')


    <div class="container-fluid content-home">
        <div class="title-list">
            <h5 class="my-5">Lista de Registros</h5>
        </div>

        <div class="row">
            <div class="col-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Rua</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>

                    @foreach ($registros as $registro)
                        <tbody>
                            <tr>
                                <td>{{ $registro->id }}</td>
                                <td><img width="25" height="25" class="rounded-circle d-flex" src="{{ asset($registro->imagem) }}"
                                        alt=""></td>
                                <td>{{ $registro->nome }}</td>
                                <td>{{ $registro->sobrenome }}</td>
                                <td>{{ $registro->cpf }}</td>
                                <td>{{ $registro->email }}</td>
                                <td>{{ $registro->telefone }}</td>
                                <td>{{ $registro->adress }}</td>
                                <td>{{ $registro->rua }}</td>
                                <td>
                                    <a class="btn btn-warning"
                                        href="{{ route('users.users.user.editar', $registro->id) }}">Editar</a>
                                    <a class="btn btn-danger"
                                        href="{{ route('users.users.user.deletar', $registro->id) }}">Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

@endsection
