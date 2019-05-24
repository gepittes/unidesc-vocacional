@extends('layouts.template_teste')

@section('conteudo')
    <div class="wrapper">
        <header class="alinhar-bg-questoes">
            <img src="{{asset("/assets/template/img/elemento-capa-2019.png")}}" alt="capa" style="width: 800px">
        </header>


        <div class="container">

            {{-- MODAL(Mensagem de Orientacao)--}}

            <div class="modal fade mt-5" tabindex="-1" role="dialog" id="avisoCand">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold">Orientações</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-justify font-weight-normal"><strong>1-</strong> Você deve ler as alternativas
                                do campo <strong>A</strong> e depois do campo <strong>B</strong> de cada grupo e
                                escolher
                                uma alternativa que seja do seu interesse.
                                <span class="font-italic text-danger">
                                    Caso não tenha interesse por nenhuma das alternativas pode deixar em branco.
                                </span>
                            </p>
                            <p class="text-justify font-weight-normal"><strong>2-</strong> De acordo com a pontuação de
                                cada grupo, na última página, você irá
                                identificar as áreas de conhecimento que você apresenta mais
                                habilidades e interesse.</p>
                            <p class="text-justify font-weight-normal"><strong>3-</strong> Com base no seu resultado,
                                pesquise sobre as profissões relacionadas a
                                cada área (o que faz, onde atua, mercado de trabalho e etc)
                                e veja aquela com a qual tem maior afinidade para estudo.</p>
                        </div>
                        <div class="modal-footer">
                            <span></span>
                            <button type="button" class="btn btn-success" data-dismiss="modal"><strong>OK!</strong>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{--   AQUI VEM O WIZARD  --}}

            <form action="{{route('recebe.questoes.cand')}}" method="post">
                @csrf

                <div id="smartwizard">
                    <ul class="alinhar-mid-teste">
                        <li><a href="#step-1">Grupo A<br/>
                            </a></li>
                        <li><a href="#step-2">Grupo B<br/>
                            </a></li>
                        <li><a href="#step-3">Grupo C<br/>
                            </a></li>
                        <li><a href="#step-4">Grupo D<br/>
                            </a></li>
                        <li><a href="#step-5">Grupo E<br/>
                            </a></li>
                    </ul>

                    <div>

                        {{-- GRUPO A --}}
                        <div id="step-1">
                            <div class="row">
                                <div class="col-4 text-center"><b>Peferência A</b></div>
                                <div class="col-4 text-center"><b>Escolha</b></div>
                                <div class="col-4 text-center"><b>Peferência B</b></div>
                            </div>

                            @for($i = 1; $i <= 12; $i++)
                                <div class="row content-center">
                                    <div class="col-4">
                                        <label onclick="setAlternativa('A', '{{$i}}', 'A')" id="GpAA{{$i}}">
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpA{{$i}}"
                                               name="GpA{{$i}}">
                                    </div>
                                    <div class="col-4">
                                        <label onclick="setAlternativa('B', '{{$i}}', 'A')" id="GpAB{{$i}}">
                                        </label>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        {{-- GRUPO B --}}
                        <div id="step-2">
                            <div class="row">
                                <div class="col-4 text-center"><b>Peferência A</b></div>
                                <div class="col-4 text-center"><b>Escolha</b></div>
                                <div class="col-4 text-center"><b>Peferência B</b></div>
                            </div>

                            @for($i = 1; $i <= 12; $i++)
                                <div class="row content-center">
                                    <div class="col-4">
                                        <label onclick="setAlternativa('A', '{{$i}}', 'B')" id="GpBA{{$i}}">
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpB{{$i}}"
                                               name="GpB{{$i}}">
                                    </div>
                                    <div class="col-4">
                                        <label onclick="setAlternativa('B', '{{$i}}', 'B')" id="GpBB{{$i}}">
                                        </label>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        {{-- GRUPO C --}}
                        <div id="step-3">
                            <div class="row">
                                <div class="col-4 text-center"><b>Peferência A</b></div>
                                <div class="col-4 text-center"><b>Escolha</b></div>
                                <div class="col-4 text-center"><b>Peferência B</b></div>
                            </div>

                            @for($i = 1; $i <= 12; $i++)
                                <div class="row content-center">
                                    <div class="col-4">
                                        <label onclick="setAlternativa('A', '{{$i}}', 'C')" id="GpCA{{$i}}">
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpC{{$i}}"
                                               name="GpC{{$i}}">
                                    </div>
                                    <div class="col-4">
                                        <label onclick="setAlternativa('B', '{{$i}}', 'C')" id="GpCB{{$i}}">
                                        </label>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        {{-- GRUPO D --}}
                        <div id="step-4">
                            <div class="row">
                                <div class="col-4 text-center"><b>Peferência A</b></div>
                                <div class="col-4 text-center"><b>Escolha</b></div>
                                <div class="col-4 text-center"><b>Peferência B</b></div>
                            </div>

                            @for($i = 1; $i <= 12; $i++)
                                <div class="row content-center">
                                    <div class="col-4">
                                        <label onclick="setAlternativa('A', '{{$i}}', 'D')" id="GpDA{{$i}}">
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpD{{$i}}"
                                               name="GpD{{$i}}">
                                    </div>
                                    <div class="col-4">
                                        <label onclick="setAlternativa('B', '{{$i}}', 'D')" id="GpDB{{$i}}">
                                        </label>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        {{-- GRUPO E --}}
                        <div id="step-5">
                            <div class="row">
                                <div class="col-4 text-center"><b>Peferência A</b></div>
                                <div class="col-4 text-center"><b>Escolha</b></div>
                                <div class="col-4 text-center"><b>Peferência B</b></div>
                            </div>

                            @for($i = 1; $i <= 12; $i++)
                                <div class="row content-center">
                                    <div class="col-4">
                                        <label onclick="setAlternativa('A', '{{$i}}', 'E')" id="GpEA{{$i}}">
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpE{{$i}}"
                                               name="GpE{{$i}}">
                                    </div>
                                    <div class="col-4">
                                        <label onclick="setAlternativa('B', '{{$i}}', 'E')" id="GpEB{{$i}}">
                                        </label>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>


@endsection

@section('scripts_wizard')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#avisoCand').modal('show');


            {{-- Escreve os enunciados das questoes nos labels --}}
                $questoes = $.getJSON('/api/questoes', function (data) {

                {{-- Ponto de partida do grupo A no JSON --}}
                    $j = 0;
                for ($i = 1; $i <= 12; $i++) {

                    document.getElementById("GpAA" + $i).innerHTML = "<strong class='text-info'>A</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j].texto_alternativa;

                    document.getElementById("GpAB" + $i).innerHTML = "<strong class='text-danger'>B</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j + 1].texto_alternativa;

                    $j += 2;
                }

                {{-- Ponto de partida do grupo B no JSON --}}
                    $j = 25;
                for ($i = 1; $i <= 12; $i++) {

                    document.getElementById("GpBA" + $i).innerHTML = "<strong class='text-info'>A</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j].texto_alternativa;
                    document.getElementById("GpBB" + $i).innerHTML = "<strong class='text-danger'>B</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j + 1].texto_alternativa;

                    $j += 2;
                }

                {{-- Ponto de partida do grupo C no JSON --}}
                    $j = 48;
                for ($i = 1; $i <= 12; $i++) {

                    document.getElementById("GpCA" + $i).innerHTML = "<strong class='text-info'>A</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j].texto_alternativa;
                    document.getElementById("GpCB" + $i).innerHTML = "<strong class='text-danger'>B</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j + 1].texto_alternativa;

                    $j += 2;
                }

                {{-- Ponto de partida do grupo D no JSON --}}
                    $j = 72;
                for ($i = 1; $i <= 12; $i++) {

                    document.getElementById("GpDA" + $i).innerHTML = "<strong class='text-info'>A</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j].texto_alternativa;
                    document.getElementById("GpDB" + $i).innerHTML = "<strong class='text-danger'>B</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j + 1].texto_alternativa;

                    $j += 2;
                }

                {{-- Ponto de partida do grupo E no JSON --}}
                    $j = 96;
                for ($i = 1; $i <= 12; $i++) {

                    document.getElementById("GpEA" + $i).innerHTML = "<strong class='text-info'>A</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j].texto_alternativa;
                    document.getElementById("GpEB" + $i).innerHTML = "<strong class='text-danger'>B</strong> <i class=\"fas fa-angle-right\"></i> " +
                        $questoes.responseJSON[$j + 1].texto_alternativa;

                    $j += 2;
                }
            });
             // Mostar o botão enviar apenas no último Step
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                if($('button.sw-btn-next').hasClass('disabled')){
                    $('.sw-btn-group-extra').show(); // show the button extra only in the last page
                }else{
                    $('.sw-btn-group-extra').hide();
                }
            });

            $('#smartwizard').smartWizard({
                selected: 0,  // Initial selected step, 0 = first step
                keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                autoAdjustHeight: false, // Automatically adjust content height
                cycleSteps: false, // Allows to cycle the navigation of steps
                backButtonSupport: true, // Enable the back button support
                useURLhash: true, // Enable selection of the step based on url hash
                lang: {  // Language variables
                    next: 'Proximo',
                    previous: 'Anterior'
                },


                toolbarSettings: {
                    toolbarPosition: 'bottom', // none, top, bottom, both
                    toolbarButtonPosition: 'right', // left, right
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true, // show/hide a Previous button
                    toolbarExtraButtons: [
                        $('<button type="submit"></button>').text('Enviar')
                            .addClass('btn btn-info')
                    ]
                },

                contentURL: null, // content url, Enables Ajax content loading. can set as data data-content-url on anchor
                disabledSteps: [],    // Array Steps disabled
                errorSteps: [],    // Highlight step with errors
                theme: 'dots',
                transitionEffect: 'fade', // Effect on navigation, none/slide/fade
                transitionSpeed: '400'
            });
        });


        {{-- Selecionar escolha quando clicar na label --}}
        function setAlternativa(altenativa, index, grupo) {

            switch (grupo) {

                case 'A':
                    const escolhidaGpA = $("#rangerGpA" + index);
                    console.log(altenativa, index, grupo, escolhidaGpA); //DEBUG

                    if (altenativa === 'A') {
                        escolhidaGpA.val(0);
                        console.log('entrou no A')
                    } else {
                        escolhidaGpA.val(2);
                        console.log('entrou no B')
                    }

                    break;

                case 'B':
                    const escolhidaGpB = $("#rangerGpB" + index);
                    console.log(altenativa, index, grupo, escolhidaGpB); //DEBUG

                    if (altenativa === 'A') {
                        escolhidaGpB.val(0);
                        console.log('entrou no A')
                    } else {
                        escolhidaGpB.val(2);
                        console.log('entrou no B')
                    }
                    break;

                case 'C':
                    const escolhidaGpC = $("#rangerGpC" + index);
                    console.log(altenativa, index, grupo, escolhidaGpC); //DEBUG

                    if (altenativa === 'A') {
                        escolhidaGpC.val(0);
                        console.log('entrou no A')
                    } else {
                        escolhidaGpC.val(2);
                        console.log('entrou no B')
                    }
                    break;

                case 'D':
                    const escolhidaGpD = $("#rangerGpD" + index);
                    console.log(altenativa, index, grupo, escolhidaGpD); //DEBUG

                    if (altenativa === 'A') {
                        escolhidaGpD.val(0);
                        console.log('entrou no A')
                    } else {
                        escolhidaGpD.val(2);
                        console.log('entrou no B')
                    }
                    break;

                case 'E':
                    const escolhidaGpE = $("#rangerGpE" + index);
                    console.log(altenativa, index, grupo, escolhidaGpE); //DEBUG

                    if (altenativa === 'A') {
                        escolhidaGpE.val(0);
                        console.log('entrou no A')
                    } else {
                        escolhidaGpE.val(2);
                        console.log('entrou no B')
                    }
                    break;
            }
        }

    </script>
@endsection

