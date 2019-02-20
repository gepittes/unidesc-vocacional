<!DOCTYPE html>
<html lang="pt-br">

<head>
    @component('layouts.head', ['title' => $title])
    @endcomponent
</head>

<body class="login-page sidebar-collapse">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent ">
    <div class="container">
        <div class="dropdown button-dropdown">
            <a href="#" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
            </a>
            {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                {{--<a class="dropdown-header">Dropdown header</a>--}}
                {{--<a class="dropdown-item" href="#">Action</a>--}}
                {{--<a class="dropdown-item" href="#">Another action</a>--}}
                {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                {{--<div class="dropdown-divider"></div>--}}
                {{--<a class="dropdown-item" href="#">Separated link</a>--}}
                {{--<div class="dropdown-divider"></div>--}}
                {{--<a class="dropdown-item" href="#">One more separated link</a>--}}
            {{--</div>--}}
        </div>
        <div class="navbar-translate">
            <a class="navbar-brand" href="http://www.unidesc.edu.br/" rel="tooltip"  data-placement="bottom" target="_blank">
                UNIDESC
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Unidesc Vocacional</a>
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip"  data-placement="bottom" href="https://www.facebook.com/unidesc/" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip"  data-placement="bottom" href="https://www.instagram.com/unidesc/" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{url('templeteAssets/assets/img/estudo-bg-login.jpg')}})"></div>
    <div class="content">
        <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
                <div class="card card-login card-plain">

                    <form class="form" method="POST" action="{{route('login')}}">
                        @csrf
                                <img src="{{url('templeteAssets/assets/img/teste-vocacional-logo.png')}}" alt="">
                        <div class="card-body">
                            {{--EMAIL--}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            @if ($errors->has('email'))
                                <span class="badge badge-danger">{{ $errors->first('email') }}</span>
                            @endif


                            {{--PASSWORD--}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="now-ui-icons text_caps-small"></i>
                                    </span>
                                </div>
                                <input type="password" placeholder="Password" class="form-control" name="password"/>
                            </div>
                            @if ($errors->has('password'))
                                <span class="badge badge-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Login</button>
                            <div class="pull-left">
                                <h6>
                                    {{--<a href="#" class="link">Create Account</a>--}}
                                </h6>
                            </div>
                            <div class="pull-right">
                                <h6>
                                    <a href="#" class="link">Ajuda?</a>
                                </h6>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">

                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, UNIDESC
                    {{--<a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by--}}
                    {{--<a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.--}}
                </div>
            </div>
        </footer>
    </div>
</div>
    @component('layouts.scripts')
    @endcomponent
</body>

</html>