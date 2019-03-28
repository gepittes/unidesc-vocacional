@extends('layouts.template-teste')

@section('conteudo')
    <div class="wrapper">
        <div class="container">
            <hr>
            <div class="alinhar-mid-teste">
                <a onclick="startQuestoes();"><button type="button" class="btn btn-success"><strong>Iniciar Teste!</strong></button></a>
            </div>
            <hr>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg center-modal-screen" tabindex="-1" role="dialog"
         id="questoes" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                {{--COMPONENTE ISOLADO DAS QUESTOES--}}
                @component('components.questaos')
                @endcomponent

            </div>
        </div>
    </div>
    {{--ABRE MODAL PARA INICIAR QUESTOES--}}
    <script>

    </script>
@endsection

