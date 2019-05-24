<!DOCTYPE html>
<html lang="pt-br">

@component('layouts.head', ['title' => $title])
@endcomponent

    <body class="index-page sidebar-collapse">

            @yield('conteudo')

    </body>

@include('layouts.scripts')

@yield('scripts_wizard')

@yield('scripts_google_charts')

</html>
