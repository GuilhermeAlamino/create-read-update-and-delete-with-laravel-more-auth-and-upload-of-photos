    <div class="col-12 p-0 m-0">
        <div class="row nav-customize p-0 m-0 pt-3">
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
                            <div
                                class="content-menu-nav d-flex align-items-center {{ Request::is('admin/*') ? 'side-color-left' : 'side-color-left-transparent' }} {{ Request::is('admin/*') ? 'back-white' : ' ' }}">
                                <i class="fa-solid fa-house"></i>
                                <a class="nav-link {{ Request::is('admin/*') ? 'nav-link-customize' : ' ' }}"
                                    href="{{ route('admin.welcome.list') }}">Home</a>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div
                                class="content-menu-nav d-flex align-items-center {{ Request::is('cursos/*') ? 'side-color-left' : 'side-color-left-transparent' }} {{ Request::is('cursos/*') ? 'back-white' : ' ' }}">
                                <i class="fa-solid fa-id-card"></i>
                                <a class="nav-link {{ Request::is('cursos/*') ? 'nav-link-customize' : ' ' }}"
                                    href="{{ route('cursos.cursos.user.lista') }}">Cursos</a>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div
                                class="content-menu-nav d-flex align-items-center {{ Request::is('users/*') ? 'side-color-left' : 'side-color-left-transparent' }} {{ Request::is('users/*') ? 'back-white' : ' ' }}">
                                <i class="fa-solid fa-users"></i>
                                <a class="nav-link {{ Request::is('users/*') ? 'nav-link-customize' : ' ' }}"
                                    href="{{ route('users.users.user.adicionar') }}">Usúarios</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div
                                class="content-menu-nav d-flex align-items-center {{ Request::is('config/*') ? 'side-color-left' : 'side-color-left-transparent' }} {{ Request::is('config/*') ? 'back-white' : ' ' }}">
                                <i class="fa-solid fa-gear"></i>
                                <a class="nav-link {{ Request::is('config/*') ? 'nav-link-customize' : ' ' }}"
                                    href="{{ route('config.config.configusers') }}">Adicionar Admin</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div
                                class="content-menu-nav d-flex align-items-center {{ Request::is('configedit/*') ? 'side-color-left' : 'side-color-left-transparent' }} {{ Request::is('configedit/*') ? 'back-white' : ' ' }}">
                                <i class="fa-solid fa-gear"></i>
                                <a class="nav-link {{ Request::is('configedit/*') ? 'nav-link-customize' : ' ' }}"
                                    href="{{ route('configedit.configedit.edit') }}">Alterar Configurações</a>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 m-0">
                        <div class="col-12 p-0 m-0">
                            <div class="content-menu-nav d-flex align-items-center side-color-left-transparent">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <a class="nav-link" href="{{ route('welcome.login.logout') }}">Sair</a>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
