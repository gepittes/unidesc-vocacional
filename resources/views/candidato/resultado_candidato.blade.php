@extends('layouts.template_teste')
{{--{{$title = 'teste'}}--}}
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@section('conteudo')
    <header class="alinhar-bg-questoes">
        <img src="{{asset("/assets/template/img/elemento-capa-2019.png")}}" alt="capa" style="width: 800px">
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

{{--                <div class="shadow-sm p-3 border border-dark mb-3">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <div class="card" style="width: 20rem;">--}}
{{--                                <img class="card-img-top" src="..." alt="Card image cap">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="card-text">Some quick example text to build on the card title and make up--}}
{{--                                        the bulk of the card's content.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <div class="card" style="width: 20rem;">--}}
{{--                                <img class="card-img-top" src="..." alt="Card image cap">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="card-text">Some quick example text to build on the card title and make up--}}
{{--                                        the bulk of the card's content.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <div class="card" style="width: 20rem;">--}}
{{--                                <img class="card-img-top" src="..." alt="Card image cap">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="card-text">Some quick example text to build on the card title and make up--}}
{{--                                        the bulk of the card's content.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row justify-content-md-center">--}}
{{--                        <div class="col col-auto">--}}
{{--                            <div class="card" style="width: 20rem;">--}}
{{--                                <img class="card-img-top" src="..." alt="Card image cap">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="card-text">Some quick example text to build on the card title and make up--}}
{{--                                        the bulk of the card's content.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col col-auto">--}}
{{--                            <div class="card" style="width: 20rem;">--}}
{{--                                <img class="card-img-top" src="..." alt="Card image cap">--}}
{{--                                <div class="card-body">--}}
{{--                                    <p class="card-text">Some quick example text to build on the card title and make up--}}
{{--                                        the bulk of the card's content.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}


                    <div class="alinhar-mid-teste">
                        <div id="resultadoGrafico" style="width: 900px; height: 500px;">

                        </div>

                    </div>






                                {{$resultado_cand->resultado->GPA}}
                                {{$resultado_cand->resultado->GPB}}
                                {{$resultado_cand->resultado->GPC}}
                                {{$resultado_cand->resultado->GPD}}
                                {{$resultado_cand->resultado->GPE}}


                <div class="row shadow-sm p-3 border border-success">
                    <span class="font-weight-bold">Nivel de Interesse:</span>
                    <div class="col">
                        <span class="badge badge-default">0 a 3 pontos – pequeno</span>
                    </div>
                    <div class="col">
                        <span class="badge badge-warning">4 a 6 pontos – moderado</span>
                    </div>
                    <div class="col">
                        <span class="badge badge-primary">7 a 9 pontos – grande</span>
                    </div>
                    <div class="col">
                        <span class="badge badge-info">10 a 12 pontos – muito forte</span>
                    </div>
                </div>

                <div class="alinhar-mid-teste">
                    <a href="{{route('home')}}"><button class="btn btn-success"><strong>Finalizar Teste !</strong></button></a>
                </div>


            </div>
        </div>
    </div>

    @component('components.footer')
    @endcomponent
@endsection

@section('scripts_google_charts')
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Grupos', 'Pontos'],
                ['GRUPO A',  {{$resultado_cand->resultado->GPA}}],
                ['GRUPO B',  {{$resultado_cand->resultado->GPB}}],
                ['GRUPO C',  {{$resultado_cand->resultado->GPC}}],
                ['GRUPO D',  {{$resultado_cand->resultado->GPD}}],
                ['GRUPO E',  {{$resultado_cand->resultado->GPE}}]
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
