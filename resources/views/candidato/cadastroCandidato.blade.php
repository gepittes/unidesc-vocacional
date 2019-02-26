<!DOCTYPE html>
<html lang="pt-br">

    @component('layouts.head', ['title' => $title])
    @endcomponent

<body class="index-page sidebar-collapse" id="topo">

<div class="wrapper">
        <div class="section section-basic" id="basic-elements">
            <div class="container">
                <h3 class="title" id="artigo-ti">Cadastre-se abaixo</h3><hr>
                    <form>
                        @csrf
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group col">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group col">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group col">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<div class="topo" id="botaoTopo" style="display: none">
    <a href="#topo" class="scroll" onclick="hiddenbotaoTopo()"><button class="btn btn-neutral btn-icon btn-round"><i class="fas fa-arrow-circle-up"></i></button></a>
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