<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('templeteAssets/assets/img/favicon.png')}}">

    <title>Teste Vocacional | Not Found</title>

    <!-- Google font -->
    <link href="{{url('assets404/fonts/font-oswald.css')}}" rel="stylesheet">
    <link href="{{url('assets404/fonts/font-lato.css')}}" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link type="text/css" rel="stylesheet" href="{{url('assets404/css/font-awesome.min.css')}}" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{url('assets404/css/style.css')}}" />


</head>

<body>

<div id="notfound">
    <div class="notfound-bg">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="notfound">
        <div class="notfound-404">
            <h1>404</h1>
        </div>
        <h2>Página não Encontrada</h2>
        <p>Você pode esta tentando acessar uma pagina que não existe em nosso sistema. Entre em contato conosco caso seja necessário.</p>
        <a href="{{route('home')}}">Homepage</a>
        <div class="notfound-social">
            <a href="https://www.facebook.com/unidesc/" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
</div>

</body>
</html>