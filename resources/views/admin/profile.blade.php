@extends('layouts.template_teste')

@section('conteudo')

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
                        <a class="nav-link" href="{{ route('admin.dashboard') }}" id="bt_relatorio"><b><i class="fas fa-table"></i> Relatório</b></a>
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
                                <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                    <span class="text-dark"> Meu Perfil <i class="fas fa-user-alt"></i></span>
                                </a>
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


    <div class="container border">

        <h3 class="mt-1">Detalhe da minha conta</h3>

        @if ($message = session()->get('success'))
            <div class="alert alert-success ">
                {{ $message }}
            </div>
        @endif

        <div class="col border">
            <div>Usuário: <b>{{ auth()->user()->name }}</b></div>
            <div>E-mail: <b>{{ auth()->user()->email }}</b></div>
            <div>Criado em: <b>{{ date('d-M-y | H:m', strtotime(auth()->user()->created_at)) }}</b></div>
            <div>Atualizado em: <b>{{ date('d-M-y | H:m', strtotime(auth()->user()->updated_at)) }}</b></div>
        </div>

        <!-- modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUpdate">
            Atualizar conta
        </button>

        <!-- Modal atualizar conta  -->
        <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Atualizar conta</h5>
                    </div>
                    <div class="modal-body">
                        @include('admin.update_conta')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer_simple')
@endsection

@section('scripts_profile')
    <script>

        // Isso é importante em caso de erro mosta o modal novmente
        $(document).ready(function () {
            const error = $('span').hasClass('space-error-bg')
            if (error) {
                $('#modalUpdate').modal('show');
            }
        })
    </script>
@endsection

