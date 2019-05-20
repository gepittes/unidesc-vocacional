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
                        Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de
                        2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de
                        45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia,
                        pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem
                        Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua
                        indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et
                        Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de
                        teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem
                        Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.

                        O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para
                        os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também
                        foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da
                        tradução feita por H. Rackham em 1914.
                    </div>
                    <div id="step-2" class="">
                        Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de
                        2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de
                        45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia,
                        pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem
                        Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua
                        indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et
                        Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de
                        teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem
                        Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.

                        O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para
                        os interessados. Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero também
                        foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da
                        tradução feita por H. Rackham em 1914.
                    </div>
                    <div id="step-3" class="">
                        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem
                        sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos
                        e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco
                        séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente
                        inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo
                        passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de
                        editoração eletrônica como Aldus PageMaker.
                    </div>
                    <div id="step-4" class="">
                        Step Content4
                    </div>
                    <div id="step-5" class="">
                        Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum
                        tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não
                        parecem nem um pouco convincentes. Se você pretende usar uma passagem de Lorem Ipsum, precisa
                        ter certeza de que não há algo embaraçoso escrito escondido no meio do texto. Todos os geradores
                        de Lorem Ipsum na internet tendem a repetir pedaços predefinidos conforme necessário, fazendo
                        deste o primeiro gerador de Lorem Ipsum autêntico da internet. Ele usa um dicionário com mais de
                        200 palavras em Latim combinado com um punhado de modelos de estrutura de frases para gerar um
                        Lorem Ipsum com aparência razoável, livre de repetições, inserções de humor, palavras não
                        características, etc.
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


    </script>
@endsection

