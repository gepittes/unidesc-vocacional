@extends('layouts.template_teste')

@section('admin_conteudo')

    <header class="alinhar-bg-questoes">
        <img src="{{asset("/assets/template/img/elemento-capa-2019.png")}}" style="width: 800px">
    </header>

    <nav class="navbar navbar-expand-lg bg-info mb-1">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><b><i class="fas fa-question"></i> Teste Vocacional</b></a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}"><b><i class="fas fa-home"></i> Dashboard</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="bt_relatorio"><b><i class="fas fa-table"></i> Relatório</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="bt_grafico"><b><i class="fas fa-chart-line"></i>
                                Gráfico</b></a>
                    </li>
                </ul>
                <div class="form-inline ml-auto" data-background-color>
                    <div class="form-group has-white">
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-round dropdown-toggle m-0" type="button"
                                    data-toggle="dropdown"
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

                                <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="ml-5 mr-5 ">
        <div class="d-flex justify-content-center pt-0">
            <h3 class="title p-2 mb-2"><i class="fas fa-table"></i> Resultados</h3>
        </div>
        <form action="{{route('admin.resultados')}}" method="POST">
            @csrf
            <div class="d-flex justify-content-center pt-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center align-content-center">
                            <div class="col-2">
                                <h5>Data de Inicio:</h5>
                                <input class="form-control" type="date" name="dt_inicio" id="dt_inicio">
                            </div>
                            <div class="col-2">
                                <h5>Data de fim:</h5>
                                <input class="form-control" type="date" name="dt_fim" id="dt_fim">
                            </div>
                            <div class="col-1">
                                <button type="submit" class="btn btn-round btn-success mt-4"><b>Buscar!</b></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="card" id="tabela" style="display: none">
            <div class="card-body">

                <table id="relatorio" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>GP A</th>
                        <th>GP B</th>
                        <th>GP C</th>
                        <th>GP D</th>
                        <th>GP E</th>
                        <th>Unisersidade</th>
                        <th>Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data_tabela as $dat)
                        <tr>
                            <td>{{$dat->nome}}</td>
                            <td>{{$dat->email}}</td>
                            <td>{{$dat->telefone}}</td>
                            <td>{{$dat->resultado->GPA}}</td>
                            <td>{{$dat->resultado->GPB}}</td>
                            <td>{{$dat->resultado->GPC}}</td>
                            <td>{{$dat->resultado->GPD}}</td>
                            <td>{{$dat->resultado->GPE}}</td>
                            <td>{{$dat->unisersidade->nm_universidade}}</td>
                            <td>{{$dat->created_at->format('d-m-Y')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card" id="grafico" style="display: none">
            <div class="card-body">
                <div class="position-absolute mr-5 mt-1 ">
                    <button type="button" class="btn btn-primary" onclick="generatePDF()">PDF</button>
                </div>
                <div class="d-flex justify-content-center">
                    <div style="width: 1000px">
                        <canvas id="graficoByGrupo"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer_simple')
@endsection


@section('scripts_dashboard')
    <script>
        // Cards
        $(document).ready(function () {
            $("#tabela").show();
        });

        $("#bt_relatorio").click(function () {
            $("#grafico").hide(500);
            $("#tabela").show(500);
        });

        $("#bt_grafico").click(function () {
            $("#tabela").hide(500);
            $("#grafico").show(500);
        });

        // Datatable
        $(document).ready(function () {

            $('#relatorio').DataTable({
                "bJQueryUI": true,
                "oLanguage": {
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Não foram encontrados resultados",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "oPaginate": {
                        "sFirst": "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext": "Seguinte",
                        "sLast": "Último"
                    }
                },
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5',
                    'print'
                ],
                responsive: true,
            });

            // Fix layout
            document.querySelectorAll('input[type=search]')[0].className = 'form-control';
            document.querySelectorAll('input[type=search]')[0].placeholder = 'Pesquise aqui';
            document.querySelectorAll('label')[0].firstChild.data = ''

        });

        // Charts

        var ctx = document.getElementById('graficoByGrupo').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['GRUPO A', 'GRUPO B', 'GRUPO C', 'GRUPO D', 'GRUPO E'],
                datasets: [{
                    label: '(Pontuacao > 6 no grupo)',
                    data: [
                        [{{$data_grafico->GPA}}],
                        [{{$data_grafico->GPB}}],
                        [{{$data_grafico->GPC}}],
                        [{{$data_grafico->GPD}}],
                        [{{$data_grafico->GPE}}]
                    ],
                    backgroundColor: [
                        'rgba(75, 120, 211, 1)',
                        'rgba(245, 82, 85, 1)',
                        'rgba(255, 178, 55, 1)',
                        'rgba(114, 224, 19, 1)',
                        'rgba(172, 98, 168, 1)',
                    ],
                    borderColor: [
                        'rgba(25,27,96,0.64)',
                        'rgba(25,27,96,0.64)',
                        'rgba(25,27,96,0.64)',
                        'rgba(25,27,96,0.64)',
                        'rgba(25,27,96,0.64)'
                    ],
                    borderWidth: 4
                }]
            },
            options: {

                title: {
                    display: true,
                    text: 'Quantitativo por Grupo'
                },

                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        function generatePDF() {
            const Canvas = document.getElementById("graficoByGrupo");
            const Context = Canvas.getContext("2d");

            var imgData = Canvas.toDataURL('image/png');
            var pdf = new jsPDF('landscape');
            pdf.addImage(imgData, 'PNG', 15, 15, 0, 0);
            pdf.save('download.pdf');
        }
    </script>
@endsection
