@extends('layouts.template_teste')

@section('admin_conteudo')

    <header class="alinhar-bg-questoes">
        <img src="{{asset("/assets/template/img/elemento-capa-2019.png")}}" alt="capa" style="width: 800px">
    </header>

    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><b><i class="fas fa-home"></i> Home</b></a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b><i class="fas fa-table"></i> Relatório</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b><i class="fas fa-chart-line"></i> Gráfico</b></a>
                    </li>
                </ul>
                <div class="form-inline ml-auto" data-background-color>
                    <div class="form-group has-white">
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-round dropdown-toggle m-0" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i> Olá, <b>{{Auth::user()->name}}</b>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    <span class="text-dark">Sair <i class="fas fa-door-open"></i></span>
                                </a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="mb-5">
                <h3 class="title"><i class="fas fa-table"></i> Resultados</h3>

                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
