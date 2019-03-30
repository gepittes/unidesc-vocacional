<!DOCTYPE html>
<html lang="pt-br">

@component('layouts.head', ['title' => $title])
@endcomponent

    <body class="index-page sidebar-collapse">
        <header class="alinhar">
            <img class="bg-form" src="{{asset("/templeteAssets/assets/img/capa-teste.jpg")}}" alt="">
        </header>

            @yield('conteudo')

    </body>

@include('layouts.scripts')

</html>