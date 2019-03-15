<!DOCTYPE html>
<html lang="pt-br">

    @component('layouts.head', ['title' => $title])
    @endcomponent

<body class="index-page sidebar-collapse">

<header class="alinhar">
        <img class="bg-form" src="{{asset("/templeteAssets/assets/img/capa-teste.jpg")}}" alt="">
</header>

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

                @component('layouts.questaos', ['dadosCand' => $dadosCand])
                @endcomponent

        </div>
    </div>
</div>

    @component('layouts.scripts')
    @endcomponent

<script>
    function startQuestoes() {
        $('#questoes').modal('show');
        upEnum();
    }
</script>

</body>

</html>