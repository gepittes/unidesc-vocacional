@extends('layouts.template_teste')

@section('conteudo')
    <header class="alinhar-bg-questoes">
        <img src="{{asset("/assets/template/img/elemento-capa-2019.png")}}" alt="capa" style="width: 800px"
             draggable="false">
    </header>


    <div class="wrapper">
        <div class="section-form">
            <div class="container">
                <span class="title-resultado-sobre">Resultado Final</span>
                <div>
                    <p class="text-justify font-weight-normal sobre-teste-desc">
                        É hora de descobrir as profissões para as quais você demonstra certa inclinação.
                        Veja onde você fez mais pontos e, usando como critério a tabela a baixo, confira a sua vocação.
                    </p>
                </div>

                <hr>

                <div class="alinhar-mid-teste">
                    <strong>
                        Cursos indicados a: <span class="badge badge-success">{{$resultado_cand->nome}}</span>
                    </strong>
                </div>

                <hr>


                <div class="row">

                    <div class="col-auto">
                        <div id="resultadoGrafico" style="height: 500px; width: 700px"></div>
                    </div>
                    <div class="col-auto">
                        <div class="container mt-5">

                            {{-- GRUPO A --}}
                            <div class="dropdown">
                                <button class="btn btn-purple dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="font-weight-bold"><i class="fas fa-network-wired"></i> Grupo A</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <div class="container" style="width: 20rem;">
                                        <div class="alinhar-mid-teste">
                                            <img class="card-img-top justify-content-center" draggable="false"
                                                 src="{{url('/assets/template/img/resultado-images/grupo-A-illustration.jpg')}}"
                                                 alt="Card image cap" style="width: 200px">
                                        </div>

                                        <div class="card-body">
                                            <p class="text-justify  font-weight-normal">
                                                Queda para o campo das <span class="text-info">ciências físicas</span>,
                                                que abrange profissões como
                                                <span class="text-info">engenharia, física e computação</span> por
                                                exemplo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO B --}}
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="font-weight-bold"><i
                                            class="fas fa-briefcase-medical"></i> Grupo B</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <div class="container" style="width: 20rem;">
                                        <div class="alinhar-mid-teste">
                                            <img class="card-img-top justify-content-center" draggable="false"
                                                 src="{{url('/assets/template/img/resultado-images/grupo-B-illustration.jpg')}}"
                                                 alt="Card image cap" style="width: 200px">
                                        </div>

                                        <div class="card-body">
                                            <p class="text-justify font-weight-normal">
                                                Mostra interesse pela área de <span class="text-info">biológicas</span>,
                                                ou seja, cursos indicados como <span class="text-info"> medicina,
                                                biologia, odontologia </span>e etc.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO C --}}
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="font-weight-bold"><i class="fas fa-gavel"></i> Grupo C</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <div class="container" style="width: 20rem;">
                                        <div class="alinhar-mid-teste">
                                            <img class="card-img-top justify-content-center" draggable="false"
                                                 src="{{url('/assets/template/img/resultado-images/grupo-C-illustration.jpg')}}"
                                                 alt="Card image cap" style="width: 200px">
                                        </div>

                                        <div class="card-body">
                                            <p class="text-justify font-weight-normal">
                                                Tem maior inclinação para a área de humanas,
                                                <span class="text-info">como direito, psicologia,
                                                    sociologia, economia e administração</span>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO D --}}
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="font-weight-bold"><i class="fas fa-newspaper"></i> Grupo D</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <div class="container" style="width: 20rem;">
                                        <div class="alinhar-mid-teste">
                                            <img class="card-img-top justify-content-center" draggable="false"
                                                 src="{{url('/assets/template/img/resultado-images/grupo-D-illustration.jpg')}}"
                                                 alt="Card image cap" style="width: 200px">
                                        </div>

                                        <div class="card-body">
                                            <p class="text-justify font-weight-normal">
                                                Exibe maior interesse por profissões ligadas ao uso e <span class="font-italic"> domínio da língua </span>
                                                (oral e escrita), como <span class="text-info">, relações públicas, jornalismo,
                                                    letras e etc</span>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- GRUPO E --}}
                            <div class="dropdown">
                                <button class="btn bg-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="font-weight-bold"><i class="fas fa-film"></i> Grupo E</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <div class="container" style="width: 20rem;">
                                        <div class="alinhar-mid-teste">
                                            <img class="card-img-top justify-content-center" draggable="false"
                                                 src="{{url('/assets/template/img/resultado-images/grupo-E-illustration.jpg')}}"
                                                 alt="Card image cap" style="width: 200px">
                                        </div>

                                        <div class="card-body">
                                            <p class="text-justify font-weight-normal">
                                                Tem interesse por <span class="font-italic">atividades artísticas</span>, como<span class="text-info"> cinema, teatro, música,                                                arquitetura e
                                                    artes plásticas</span>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>


                {{--                {{$resultado_cand->resultado->GPA}}--}}
                {{--                {{$resultado_cand->resultado->GPB}}--}}
                {{--                {{$resultado_cand->resultado->GPC}}--}}
                {{--                {{$resultado_cand->resultado->GPD}}--}}
                {{--                {{$resultado_cand->resultado->GPE}}--}}


                <div class="row shadow-sm p-3 border border-success">
                    <span class="font-weight-bold">Nivel de Interesse:</span>
                    <div class="col">
                        <span class="badge badge-default">0 a 3 pontos – pequeno</span>
                    </div>
                    <div class="col">
                        <span class="badge badge-icon text-dark">4 a 6 pontos – moderado</span>
                    </div>
                    <div class="col">
                        <span class="badge badge-primary">7 a 9 pontos – grande</span>
                    </div>
                    <div class="col">
                        <span class="badge badge-info">10 a 12 pontos – muito forte</span>
                    </div>
                </div>

                <div class="alinhar-mid-teste">
                    <a href="{{route('home')}}">
                        <button class="btn btn-success"><strong>Finalizar Teste !</strong></button>
                    </a>
                </div>


            </div>
        </div>
    </div>

    @component('components.footer')
    @endcomponent
@endsection

@section('scripts_google_charts')
    <script type="text/javascript">
        google.charts.load("current", {packages: ["corechart"]});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Grupos', 'Pontos'],
                ['Grupo A',  {{$resultado_cand->resultado->GPA}}],
                ['Grupo B',  {{$resultado_cand->resultado->GPB}}],
                ['Grupo C',  {{$resultado_cand->resultado->GPC}}],
                ['Grupo D',  {{$resultado_cand->resultado->GPD}}],
                ['Grupo E',  {{$resultado_cand->resultado->GPE}}]
            ]);

            var options = {
                title: 'Resultado por grupo',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('resultadoGrafico'));
            chart.draw(data, options);
        }
    </script>
@endsection
