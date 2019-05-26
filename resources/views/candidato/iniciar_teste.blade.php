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

                <div id="smartwizard" style="display: none;">
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


                        {{-- Listar Grupos --}}
                        @for ($j = 1; $j <=5; $j++)
                            <div id="step-{{ $j }}">
                                <div class="row">
                                    <div class="col-4 text-center"><b>Peferência A</b></div>
                                    <div class="col-4 text-center"><b>Escolha</b></div>
                                    <div class="col-4 text-center"><b>Peferência B</b></div>
                                </div>

                                @for($i = 1; $i <= 12; $i++)
                                    <div class="row content-center">
                                        <div class="col-4" >
                                            <label onclick="setAlternativa('A', '{{$i}}', '{{$grupo[$j]}}')"
                                                   id="Gp{{$grupo[$j]}}A{{$i}}">
                                                <strong class='text-info'>A</strong> <i class="fas fa-angle-right" ></i>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <input type="range" class="custom-range" min="0" max="2"
                                                   id="rangerGp{{$grupo[$j]}}{{$i}}" name="Gp{{$grupo[$j]}}{{$i}}">
                                        </div>
                                        <div class="col-4" >
                                            <label onclick="setAlternativa('B', '{{$i}}', '{{$grupo[$j]}}')"
                                                   id="Gp{{$grupo[$j]}}B{{$i}}">
                                                <strong class='text-danger'>B</strong> <i class="fas fa-angle-right"></i>
                                            </label>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>

            </form>

        </div>
    </div>


@endsection

@section('scripts_wizard')
    <script type="text/javascript">

           function montarGrupo(){

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

           }

           // Escreve os enunciados das questões nos labels

            function montarQuestoes() {


                    $questoes = $.getJSON('/api/questoes', function () {

                    {{-- Ponto de partida do grupo A no JSON --}}
                        $j = 0;
                    for ($i = 1; $i <= 12; $i++) {

                        $("#GpAA" + $i).append($questoes.responseJSON[$j].texto_alternativa);
                        $("#GpAB" + $i).append($questoes.responseJSON[$j + 1].texto_alternativa);

                        $j += 2;
                    }

                    {{-- Ponto de partida do grupo B no JSON --}}
                        $j = 25;
                    for ($i = 1; $i <= 12; $i++) {

                        $("#GpBA" + $i).append($questoes.responseJSON[$j].texto_alternativa);
                        $("#GpBB" + $i).append($questoes.responseJSON[$j + 1].texto_alternativa);

                        $j += 2;
                    }

                    {{-- Ponto de partida do grupo C no JSON --}}
                        $j = 48;
                    for ($i = 1; $i <= 12; $i++) {

                        $("#GpCA" + $i).append($questoes.responseJSON[$j].texto_alternativa);
                        $("#GpCB" + $i).append($questoes.responseJSON[$j + 1].texto_alternativa);

                        $j += 2;
                    }

                    {{-- Ponto de partida do grupo D no JSON --}}
                        $j = 72;
                    for ($i = 1; $i <= 12; $i++) {

                        $("#GpDA" + $i).append($questoes.responseJSON[$j].texto_alternativa);
                        $("#GpDB" + $i).append($questoes.responseJSON[$j + 1].texto_alternativa);


                        $j += 2;
                    }

                    {{-- Ponto de partida do grupo E no JSON --}}
                        $j = 96;
                    for ($i = 1; $i <= 12; $i++) {

                        $("#GpEA" + $i).append($questoes.responseJSON[$j].texto_alternativa);
                        $("#GpEB" + $i).append($questoes.responseJSON[$j + 1].texto_alternativa);

                        $j += 2;
                    }
                });
            }

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


        // Isso é importante para as montagens  dos elementos
        $(document).ready(function() {
            montarGrupo();
            montarQuestoes();

            // Delay para mostrar a lista de grupos
            setTimeout(function(){
                $('#smartwizard').css("display","block");
            }, 200);

            // Delay para mostrar a modal com as Dicas
            setTimeout(function(){
                $('#avisoCand').modal('show');
            }, 2000);

        })

    </script>
@endsection

