<!DOCTYPE html>
<html lang="pt-br">

@include('layouts.head')

    <body class="index-page sidebar-collapse">

            @yield('conteudo')

            @yield('admin_conteudo')

    </body>

@include('layouts.scripts')

@yield('scripts_wizard')

@yield('scripts_charts')

@yield('scripts_dashboard')

@yield('scripts_profile')

</html>
