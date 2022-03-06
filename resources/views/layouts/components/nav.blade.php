<div class="row nav-customize p-0 m-0">
    <div class="col-12 p-0 m-0">
        <div class="row p-0 m-0">
            <div class="col-12 p-0 m-0">

                @if (Auth::guest())
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav">
                                <a class="nav-link" href="{{ route('welcome.login') }}">Login</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav d-flex {{Request::is('welcome.list/*') ? 'side-color-left' : ''}}">
                                <i class="fa-solid fa-house"></i>
                                <a class="nav-link" href="{{ route('welcome.list') }}">Home</a>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav d-flex">
                                <i class="fa-solid fa-id-card"></i>
                                <a class="nav-link" href="{{ route('admin.user.lista') }}">Cursos</a>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav d-flex">
                                <i class="fa-solid fa-users"></i>
                                <a class="nav-link" href="{{ route('admin.user.adicionar') }}">Usúarios</a>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav d-flex">
                                <i class="fa-solid fa-gear"></i>
                                <a class="nav-link" href="{{ route('admin.user.lista') }}">Configurações</a>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav d-flex">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <a class="nav-link" href="{{ route('welcome.login.logout') }}">Sair</a>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
