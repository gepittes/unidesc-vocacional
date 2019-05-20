@extends('layouts.template_teste')

@section('conteudo')
    <div class="wrapper">
        <div class="container">


            {{--   AQUI VEM O WIZARD  --}}

            <div id="smartwizard">
                <ul>
                    <li><a href="#step-1">Grupo A<br/>
                            <small>Step description</small>
                        </a></li>
                    <li><a href="#step-2">Grupo B<br/>
                            <small>Step description</small>
                        </a></li>
                    <li><a href="#step-3">Grupo C<br/>
                            <small>Step description</small>
                        </a></li>
                    <li><a href="#step-4">Grupo D<br/>
                            <small>Step description</small>
                        </a></li>
                    <li><a href="#step-5">Grupo E<br/>
                            <small>Step description</small>
                        </a></li>
                </ul>

                <div>

                    <div id="step-1" class="">
                        <div class="row">
                            <div class="col-4 text-center"><b>Peferência A</b></div>
                            <div class="col-4 text-center"><b>Escolha</b></div>
                            <div class="col-4 text-center"><b>Peferência B</b></div>
                        </div>
                        @for($index = 1; $index <= 11; $index++)
                            <div class="row content-center">
                                <div class="col-4">
                                     <label for="ranger{{$index}}" id="selecionarA{{$index}}" onclick="escolhaalternativa('A', {{$index}})" >A - {{$questoes[$index]->texto_alternativa}}</label>
                                </div>
                                <div class="col-4">
                                    <input type="range" class="custom-range" min="0" max="2" id="ranger{{$index}}" value="">
                                </div>
                                <div class="col-4">
                                     <label for="ranger{{$index}}"  id="selecionarB{{$index}}" onclick="escolhaalternativa('B', {{$index}})" >B - {{$questoes[$index+1]->texto_alternativa}}</label>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <div id="step-2" class="">
                        <div class="row">
                            <div class="col-4 text-center"><b>Peferência A</b></div>
                            <div class="col-4 text-center"><b>Escolha</b></div>
                            <div class="col-4 text-center"><b>Peferência B</b></div>
                        </div>
                        @for($index = 12; $index <= 23; $index++)
                            <div class="row content-center">
                                <div class="col-4">
                                     <label for="ranger{{$index}}" id="selecionarA{{$index}}" onclick="escolhaalternativa('A', {{$index}})" >A - {{$questoes[$index]->texto_alternativa}}</label>
                                </div>
                                <div class="col-4">
                                    <input type="range" class="custom-range" min="0" max="2" id="ranger{{$index}}" value="">
                                </div>
                                <div class="col-4">
                                    <label for="ranger{{$index}}"  id="selecionarB{{$index}}" onclick="escolhaalternativa('B', {{$index}})" >B - {{$questoes[$index+1]->texto_alternativa}}</label>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div id="step-3" class="">
                        <div class="row">
                            <div class="col-4 text-center"><b>Peferência A</b></div>
                            <div class="col-4 text-center"><b>Escolha</b></div>
                            <div class="col-4 text-center"><b>Peferência B</b></div>
                        </div>
                        @for($index = 24; $index <= 35; $index++)
                            <div class="row content-center">
                                <div class="col-4">
                                     <label for="ranger{{$index}}" id="selecionarA{{$index}}" onclick="escolhaalternativa('A', {{$index}})" >A - {{$questoes[$index]->texto_alternativa}}</label>
                                </div>
                                <div class="col-4">
                                    <input type="range" class="custom-range" min="0" max="2" id="ranger{{$index}}" value="">
                                </div>
                                <div class="col-4">
                                     <label for="ranger{{$index}}"  id="selecionarB{{$index}}" onclick="escolhaalternativa('B', {{$index}})" >B - {{$questoes[$index+1]->texto_alternativa}}</label>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div id="step-4" class="">
                        <div class="row">
                            <div class="col-4 text-center"><b>Peferência A</b></div>
                            <div class="col-4 text-center"><b>Escolha</b></div>
                            <div class="col-4 text-center"><b>Peferência B</b></div>
                        </div>
                        @for($index = 36; $index <= 47; $index++)
                            <div class="row content-center">
                                <div class="col-4">
                                     <label for="ranger{{$index}}" id="selecionarA{{$index}}" onclick="escolhaalternativa('A', {{$index}})" >A - {{$questoes[$index]->texto_alternativa}}</label>
                                </div>
                                <div class="col-4">
                                    <input type="range" class="custom-range" min="0" max="2" id="ranger{{$index}}" value="">
                                </div>
                                <div class="col-4">
                                     <label for="ranger{{$index}}"  id="selecionarB{{$index}}" onclick="escolhaalternativa('B', {{$index}})" >B - {{$questoes[$index+1]->texto_alternativa}}</label>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div id="step-5" class="">
                        <div class="row">
                            <div class="col-4 text-center"><b>Peferência A</b></div>
                            <div class="col-4 text-center"><b>Escolha</b></div>
                            <div class="col-4 text-center"><b>Peferência B</b></div>
                        </div>
                        @for($index = 48; $index <= 59; $index++)
                            <div class="row content-center">
                                <div class="col-4">
                                     <label for="ranger{{$index}}" id="selecionarA{{$index}}" onclick="escolhaalternativa('A', {{$index}})" >A - {{$questoes[$index]->texto_alternativa}}</label>
                                </div>
                                <div class="col-4">
                                    <input type="range" class="custom-range" min="0" max="2" id="ranger{{$index}}" value="">
                                </div>
                                <div class="col-4">
                                     <label for="ranger{{$index}}"  id="selecionarB{{$index}}" onclick="escolhaalternativa('B', {{$index}})" >B - {{$questoes[$index+1]->texto_alternativa}}</label>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts_wizard')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#smartwizard').smartWizard({


                selected: 0,  // Initial selected step, 0 = first step
                keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                autoAdjustHeight: true, // Automatically adjust content height
                cycleSteps: false, // Allows to cycle the navigation of steps
                backButtonSupport: true, // Enable the back button support
                useURLhash: true, // Enable selection of the step based on url hash
                lang: {  // Language variables
                    next: 'Next',
                    previous: 'Previous'
                },


                toolbarSettings: {
                    toolbarPosition: 'bottom', // none, top, bottom, both
                    toolbarButtonPosition: 'right', // left, right
                    showNextButton: true, // show/hide a Next button
                    showPreviousButton: true, // show/hide a Previous button
                    toolbarExtraButtons: [
                        $('<button></button>').text('Finish')
                            .addClass('btn btn-info')
                            .on('click', function () {
                                alert('Finsih button click');
                            }),
                        $('<button></button>').text('Cancel')
                            .addClass('btn btn-danger')
                            .on('click', function () {
                                alert('Cancel button click');
                            })
                    ]
                },

                anchorSettings: {
                    anchorClickable: true, // Enable/Disable anchor navigation
                    enableAllAnchors: false, // Activates all anchors clickable all times
                    markDoneStep: true, // add done css
                    enableAnchorOnDoneStep: true, // Enable/Disable the done steps navigation
                    markAllPreviousStepsAsDone: true
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
    function escolhaalternativa(altenativa, index) {

        const escolhida = $("#ranger" + index );

        if (altenativa === 'A'){
            escolhida.val(0);

            // TODO
            // $("#selecionarA" + index).toggleClass('border border-success');
            // $("#selecionarB" + index).removeClass('border border-success');

        }else {
            escolhida.val(2);

            // TODO
            // $("#selecionarB" + index).toggleClass('border border-success');
            // $("#selecionarA" + index).removeClass('border border-success');
        }
    }

    </script>
@endsection

