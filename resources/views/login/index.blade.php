<!DOCTYPE html>
<html lang="pt-br">

    @include('layouts.head')

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
        </div>
        <div class="navbar-translate">
            <a class="navbar-brand" href="http://www.unidesc.edu.br/" rel="tooltip"  data-placement="bottom" target="_blank">
                UNIDESC
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Unidesc Vocacional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip"  data-placement="bottom" href="https://www.facebook.com/unidesc/" target="_blank">
                        <i class="fab fa-facebook-square" style="font-size: 15px"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip"  data-placement="bottom" href="https://www.instagram.com/unidesc/" target="_blank">
                        <i class="fab fa-instagram" style="font-size: 15px"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{url('assets/template/img/estudo-bg-login.jpg')}})"></div>
    <div class="content">
        <div class="container">
            <div class="col-md-4 ml-auto mr-auto">
                <div class="card card-login card-plain">

                    <form class="form" method="POST" action="{{route('login')}}">
                        @csrf
                                <img src="{{url('assets/template/img/teste-vocacional-logo.png')}}" alt="">
                        <div class="card-body">
                            {{--EMAIL--}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="email">
                                      <i class="now-ui-icons users_circle-08"></i>
                                    </label>
                                </div>
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="{{old('email')}}">
                            </div>
                            @if ($errors->has('email'))
                                <span class="badge badge-danger">{{ $errors->first('email') }}</span>
                            @endif

                            {{--PASSWORD--}}
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" type="label" for="password">
                                      <i class="now-ui-icons text_caps-small"></i>
                                    </label>
                                </div>
                                <input type="password" placeholder="Password" class="form-control" name="password" id="password"/>
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
                                {{--<h6>--}}
                                    {{--<a href="#" class="link">Ajuda?</a>--}}
                                {{--</h6>--}}
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
                </div>
            </div>
        </footer>
    </div>
</div>
    @include('layouts.scripts')
</body>

</html>
