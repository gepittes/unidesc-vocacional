@extends('layouts.template_teste')

@section('conteudo')
    <div class="wrapper">
        <div class="container">

            {{--   AQUI VEM O WIZARD  --}}

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
                                     <label for="ranger{{$i}}" id="selecionarA{{$i}}" onclick="escolhaalternativa('A', {{$i}}, 'GrupoA')">
                                         A - {{$questGpA[$i]->texto_alternativa}}
                                     </label>
                                </div>
                                <div class="col-4">
                                    <input type="range" class="custom-range" min="0" max="2" id="rangerGpA{{$i}}" name="GpA{{$i}}">
                                </div>
                                <div class="col-4">
                                     <label for="ranger{{$i}}"  id="selecionarB{{$i}}" onclick="escolhaalternativa('B', {{$i}}, 'GrupoA')">
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
                                    <label for="ranger{{$i}}" id="selecionarA{{$i}}" onclick="escolhaalternativa('A', {{$i}}, 'GrupoB')">
                                        A - {{$questGpB[$i]->texto_alternativa}}
                                    </label>
                                </div>
                                <div class="col-4">
                                    <input type="range" class="custom-range" min="0" max="2" id="rangerGpB{{$i}}" value="">
                                </div>
                                <div class="col-4">
                                    <label for="ranger{{$i}}"  id="selecionarB{{$i}}" onclick="escolhaalternativa('B', {{$i}}, 'GrupoB')">
                                        B - {{$questGpB[$i+1]->texto_alternativa}}
                                    </label>
                                </div>
                            </div>
                        @endfor
                    </div>

                    {{-- GRUPO C --}}
                    <div id="step-3">

                    </div>

                    {{-- GRUPO D --}}
                    <div id="step-4">

                    </div>

                    {{-- GRUPO E --}}
                    <div id="step-5">

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
                    // toolbarExtraButtons: [
                    //     $('<button></button>').text('Finish')
                    //         .addClass('btn btn-info')
                    //         .on('click', function () {
                    //             alert('Finsih button click');
                    //         }),
                    //     $('<button></button>').text('Cancel')
                    //         .addClass('btn btn-danger')
                    //         .on('click', function () {
                    //             alert('Cancel button click');
                    //         })
                    // ]
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
    function escolhaalternativa(altenativa, index, grupo) {

        // const escolhida = $("#ranger" + index );


        switch (grupo) {

            case 'GrupoA':
                const escolhidaGpA = $("#rangerGpA" + index);
                console.log(altenativa, index, grupo, escolhidaGpA);
                if (altenativa === 'A'){
                    escolhidaGpA.val(0);

                    // TODO
                    // $("#selecionarA" + index).toggleClass('border border-success');
                    // $("#selecionarB" + index).removeClass('border border-success');

                }else {
                    escolhidaGpA.val(2);

                    // TODO
                    // $("#selecionarB" + index).toggleClass('border border-success');
                    // $("#selecionarA" + index).removeClass('border border-success');
                }
                break;
            case 'GrupoB':
                const escolhidaGpB = $("#rangerGpB" + index);
                console.log(altenativa, index, grupo, escolhidaGpB);
                if (altenativa === 'A'){
                    escolhidaGpB.val(0);

                    // TODO
                    // $("#selecionarA" + index).toggleClass('border border-success');
                    // $("#selecionarB" + index).removeClass('border border-success');

                }else {
                    escolhidaGpB.val(2);

                    // TODO
                    // $("#selecionarB" + index).toggleClass('border border-success');
                    // $("#selecionarA" + index).removeClass('border border-success');
                }
                break;


        }





    }


    </script>
@endsection

