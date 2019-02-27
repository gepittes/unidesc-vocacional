<!DOCTYPE html>
<html lang="pt-br">

    @component('layouts.head', ['title' => $title])
    @endcomponent

<body class="index-page sidebar-collapse">

<header class="alinhar">
        <img class="bg-form" src="{{asset("/templeteAssets/assets/img/capa-teste.jpg")}}" alt="">
</header>

<div class="wrapper">
        <div class="section-form">
            <div class="container">

                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-row">
                            <span class="title h3">Cadastre-se abaixo</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row-reverse" style="margin-top: 5%">
                            <a href="{{route('home')}}"><button type="button" class="btn btn-info"><strong>Inicio</strong></button></a>
                        </div>
                    </div>
                </div><hr>

                <form action="{{route('store.cadastro')}}" METHOD="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="nome">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome">
                                @if($errors->has('nome'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('nome') }}</span>
                                @endif
                            </div>
                            <div class="form-group col">
                                <label for="telefone">Telefone Celular</label>
                                <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(DD) 00000-0000">{{--todo auto formatar campo--}}
                                @if($errors->has('telefone'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('telefone') }}</span>
                                @endif
                            </div>
                            <div class="form-group col">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nome@gmail.com">
                                @if($errors->has('email'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="cidade">Cidade</label>
                                <select class="form-control" id="cidade" name="cidade">
                                    <option value="" selected>Selecionar</option>
                                    @foreach($cidades as $cidade)
                                        <option value="{{$cidade->nome}}">{{$cidade->nome}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('cidade'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('cidade') }}</span>
                                @endif
                            </div>
                            <div class="form-group col">
                                <label for="serie">Serie</label>
                                <select class="form-control" id="serie" name="serie">
                                        <option value="" selected="selected">Selecionar</option>
                                        <optgroup label="Ensino Fundamental">
                                            <option value="6">6º</option>
                                            <option value="7">7º</option>
                                            <option value="8">8º</option>
                                            <option value="9">9º</option>
                                        </optgroup>
                                        <optgroup label="Ensino Medio">
                                            <option value="1">1º</option>
                                            <option value="2">2º</option>
                                            <option value="3">3º</option>
                                            <option value="concluido">Concluído</option>
                                        </optgroup>
                                </select>
                                @if($errors->has('serie'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('serie') }}</span>
                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                </form>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="copyright" id="copyright">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, UNIDESC |
            <a href="{{route('login')}}" target="_blank">Admin</a>. Coded by
            <a href="https://www.unidesc.edu.br/graduacao/sistemas-de-informacao">Alunos cursos de TI</a>.
        </div>
    </div>
</footer>

    @component('layouts.scripts')
    @endcomponent

</body>

</html>