<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{url('templeteAssets/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{$title}}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    {{-- FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    {{-- ICONS Font Awesonme --}}
    <link rel="stylesheet" href="{{'icons/css/all.min.css'}}">
    {{-- CSS Files --}}
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link href="{{url('templeteAssets/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('templeteAssets/assets/css/now-ui-kit.css?v=1.2.0')}}" rel="stylesheet" />
    {{--Animate Scroll--}}
    <script src="{{'js/jquery.js'}}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
            });
        });
    </script>
</head>