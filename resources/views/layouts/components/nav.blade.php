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
                            <div class="content-menu-nav d-flex {{Request::is('admin/*') ? 'side-color-left' : ' '}}">
                                <i class="fa-solid fa-house"></i>
                                <a class="nav-link" href="{{ route('admin.welcome.list') }}">Home</a>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav d-flex {{Request::is('cursos/*') ? 'side-color-left' : ' '}}">
                                <i class="fa-solid fa-id-card"></i>
                                <a class="nav-link" href="{{ route('cursos.cursos.user.lista') }}">Cursos</a>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav d-flex {{Request::is('users/*') ? 'side-color-left' : ' '}}">
                                <i class="fa-solid fa-users"></i>
                                <a class="nav-link" href="{{ route('users.users.user.adicionar') }}">Usúarios</a>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav d-flex {{Request::is('config/*') ? 'side-color-left' : ' '}}">
                                <i class="fa-solid fa-gear"></i>
                                <a class="nav-link" href="{{ route('config.config.configusers') }}">Configurações</a>
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
