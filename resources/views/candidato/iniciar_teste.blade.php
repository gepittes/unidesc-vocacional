@extends('layouts.template_teste')

@section('conteudo')
    <div class="wrapper">
        <div class="container">

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
                                        <label for="ranger{{$i}}" id="selecionarA{{$i}}"
                                               onclick="setAlternativa('A', {{$i}}, 'A')">
                                            A - {{$questGpA[$i]->texto_alternativa}}
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpA{{$i}}"
                                               name="GpA{{$i}}" value="">
                                    </div>
                                    <div class="col-4">
                                        <label for="ranger{{$i}}" id="selecionarB{{$i}}"
                                               onclick="setAlternativa('B', {{$i}}, 'A')">
                                            B - {{$questGpA[$i+1]->texto_alternativa}}
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
                                        <label for="ranger{{$i}}" id="selecionarA{{$i}}"
                                               onclick="setAlternativa('A', {{$i}}, 'B')">
                                            A - {{$questGpB[$i]->texto_alternativa}}
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpB{{$i}}"
                                               name="GpB{{$i}}" value="">
                                    </div>
                                    <div class="col-4">
                                        <label for="ranger{{$i}}" id="selecionarB{{$i}}"
                                               onclick="setAlternativa('B', {{$i}}, 'B')">
                                            B - {{$questGpB[$i+1]->texto_alternativa}}
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
                                        <label for="ranger{{$i}}" id="selecionarA{{$i}}"
                                               onclick="setAlternativa('A', {{$i}}, 'C')">
                                            A - {{$questGpC[$i]->texto_alternativa}}
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpC{{$i}}"
                                               name="GpC{{$i}}" value="">
                                    </div>
                                    <div class="col-4">
                                        <label for="ranger{{$i}}" id="selecionarB{{$i}}"
                                               onclick="setAlternativa('B', {{$i}}, 'C')">
                                            B - {{$questGpC[$i+1]->texto_alternativa}}
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
                                        <label for="ranger{{$i}}" id="selecionarA{{$i}}"
                                               onclick="setAlternativa('A', {{$i}}, 'D')">
                                            A - {{$questGpD[$i]->texto_alternativa}}
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpD{{$i}}"
                                               name="GpD{{$i}}" value="">
                                    </div>
                                    <div class="col-4">
                                        <label for="ranger{{$i}}" id="selecionarB{{$i}}"
                                               onclick="setAlternativa('B', {{$i}}, 'D')">
                                            B - {{$questGpD[$i+1]->texto_alternativa}}
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
                                        <label for="ranger{{$i}}" id="selecionarA{{$i}}"
                                               onclick="setAlternativa('A', {{$i}}, 'E')">
                                            A - {{$questGpE[$i]->texto_alternativa}}
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="range" class="custom-range" min="0" max="2" id="rangerGpE{{$i}}"
                                               name="GpE{{$i}}" value="">
                                    </div>
                                    <div class="col-4">
                                        <label for="ranger{{$i}}" id="selecionarB{{$i}}"
                                               onclick="setAlternativa('B', {{$i}}, 'E')">
                                            B - {{$questGpE[$i+1]->texto_alternativa}}
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
                            .addClass('btn btn-info'),
                        // //
                        // // $('<button></button>').text('Cancel')
                        // //     .addClass('btn btn-danger')
                        // //     .on('click', function () {
                        // //         alert('Cancel button click');
                        // //     })
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


        // Selecionar escolha quando clicar na label
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

