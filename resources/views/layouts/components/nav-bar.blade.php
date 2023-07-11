<nav class="row navbar navbar_custom navbar-expand-lg">
    <div class="col-2 d-flex align-items-center">
        <a class="navbar-brand content-menu-nav nav-link text-center" href="{{ route('admin.welcome.list') }}">Laravel</a>
    </div>
    <div class="col-10 d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse content-menu-nav" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        @if (Auth::guest())
            <div class="row p-0 m-0">
                <div class="col-12 p-0 m-0">
                    <div class="content-menu-nav">
                        <a class="nav-link" href="{{ route('welcome.login') }}">Nenhum usúario encontrado</a>
                    </div>
                </div>
            </div>
        @else
            <div class="collapse navbar-collapse content-menu-nav d-flex justify-content-end mx-3"
                id="navbarSupportedContent">
                <div class="user">
                    <div class="img ">
                        <div class="text-user">
                            <a class="nav-link text-center" href="#"><img width="30" height="30"
                                    class="rounded-circle" src="{{ Auth::user()->imagem }}" alt="">
                                {{ Auth::user()->name }} <br>Identificação
                                {{ Auth::user()->id }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

</nav>
