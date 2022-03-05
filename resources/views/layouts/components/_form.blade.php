<div class="row my-5">

    @if (isset($registro->imagem))
        <div class="col-12 col-lg-12 d-flex justify-content-center mb-5">
            <div class="imagem">
                <img width="120" height="115" class="rounded-circle" src="{{ asset($registro->imagem) }}" alt="">
            </div>
        </div>
    @endif

    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome"
                value="{{ isset($registro->nome) ? $registro->nome : '' }}">
        </div>
    </div>

    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome"
                value="{{ isset($registro->sobrenome) ? $registro->sobrenome : '' }}">
        </div>
    </div>

    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Cpf</label>
            <input type="text" class="form-control" name="cpf"
                value="{{ isset($registro->cpf) ? $registro->cpf : '' }}">
        </div>
    </div>

    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email"
                value="{{ isset($registro->email) ? $registro->email : '' }}">
        </div>
    </div>

    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" class="form-control" name="telefone"
                value="{{ isset($registro->telefone) ? $registro->telefone : '' }}">
        </div>
    </div>


    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Logradouro</label>
            <input type="text" name="adress" class="form-control"
                value="{{ isset($registro->adress) ? $registro->adress : '' }}">
        </div>
    </div>

    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Rua/Avenida</label>
            <input type="text" name="rua" class="form-control"
                value="{{ isset($registro->rua) ? $registro->rua : '' }}">
        </div>
    </div>

    <div class="col-12 col-lg-6 d-flex align-items-end">

        <div class="form-group">
            <input type="file" name="imagem" value="{{ isset($registro->imagem) ? $registro->imagem : '' }}">
        </div>
    </div>


</div>
