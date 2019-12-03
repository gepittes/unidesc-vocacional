@extends('layouts.template_teste')

@section('conteudo')

    <div class="wrapper">
        <header class="alinhar">
            <img class="bg-form" src="{{asset("/assets/template/img/capa-teste.jpg")}}" alt="capa">
        </header>

        <div class="section-form">
            <div class="container">

                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-row">
                            <span class="title h3">Cadastre-se abaixo</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-row-reverse mt-lg-4">
                            <a href="{{route('home')}}">
                                <button type="button" class="btn btn-info btn-rp-inicio">
                                    <strong><i class="fas fa-home"></i> Inicio</strong></button>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>

                <form action="{{route('candidato.dados')}}" method="POST">
                    @csrf
                    {{--NOME COMPLETO--}}
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome"
                                   value="{{old('nome')}}" required>
                            @if($errors->has('nome'))
                                <span class="badge badge-danger space-error-bg">{{ $errors->first('nome') }}</span>
                            @endif
                        </div>
                        {{--TELEFONE--}}
                        <div class="form-group col">
                            <label for="telefone">Telefone Celular</label>
                            <input type="text" class="form-control phone_with_ddd" id="telefone" name="telefone"
                                   placeholder="(DD) 00000-0000" value="{{old('telefone')}}" required>
                            @if($errors->has('telefone'))
                                <span class="badge badge-danger space-error-bg">{{ $errors->first('telefone') }}</span>
                            @endif
                        </div>
                        {{--EMAIL--}}
                        <div class="form-group col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="nome@gmail.com" value="{{old('email')}}" required>
                            @if($errors->has('email'))
                                <span class="badge badge-danger space-error-bg">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        {{--LOCALIDADE--}}
                        <div class="form-group col">
                            <div id="estados">
                                <label for="opcaoEstados">Estados</label>
                                <select class="form-control" id="opcaoEstados" required>
                                    <option value="">Selecione seu estado</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col">
                            <div id="cidades" class="mt-1">
                                <label for="opcaoCidades">Cidades</label>
                                <select class="form-control" id="opcaoCidades" name="cidade">
                                    <option value="">Selecione sua cidade</option>
                                </select>
                            </div>
                        </div>
                        {{--ESCOLARIDADES--}}
                        <div class="form-group col">
                            <label for="escolaridade">Serie</label>
                            <select class="form-control" id="escolaridade" name="escolaridade" required>
                                <option value="">Selecione sua Série</option>
                                <optgroup label="Ensino Fundamental">
                                    @foreach($escolaridades as $esc)
                                        @if ($esc->id <= 4)
                                            @if($esc->id == old('escolaridade'))
                                                <option value="{{old('escolaridade')}}" selected>{{$esc->ano}}</option>
                                            @else
                                                <option value="{{$esc->id}}">{{$esc->ano}}</option>
                                            @endif
                                        @endif
                                    @endforeach
                                </optgroup>
                                <optgroup label="Ensino Médio">
                                    @foreach($escolaridades as $esc)
                                        @if ($esc->id >= 5)
                                            @if($esc->id == old('escolaridade'))
                                                <option value="{{old('escolaridade')}}" selected>{{$esc->ano}}</option>
                                            @else
                                                <option value="{{$esc->id}}">{{$esc->ano}}</option>
                                            @endif
                                        @endif
                                    @endforeach
                                </optgroup>
                            </select>
                            @if($errors->has('escolariade'))
                                <span class="badge badge-danger space-error-bg">{{ $errors->first('escolariade') }}</span>
                            @endif
                        </div>
                        {{--IP Adress--}}
                        <input value="{{$_SERVER['REMOTE_ADDR']}}" name="visitor" type="hidden">
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-rp-submit"><i
                                    class="fas fa-paper-plane"></i> Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('components.footer_simple')

@endsection

@section('scripts_cadastro_candidato')
    <script src="{{asset('assets/js/axios.min.js')}}"></script>
    <script type="text/javascript">
        axios.get('{{route('api.get.estados')}}').then((resp) => {

            let estados = document.querySelector('#opcaoEstados');
            let cidades = document.querySelector('#opcaoCidades');

            // Monta os estados
            resp.data.forEach(({ id, nm_estado }) => {
                let opt = document.createElement('option');
                opt.value = id;
                opt.innerHTML = nm_estado;
                estados.appendChild(opt)
            });

            estados.addEventListener('change', () => {

                let estado_id = estados.value;
                rollbackLocalidades();

                const BASE_URL = '{{$_SERVER['SERVER_NAME']}}';
                const PORT = '{{$_SERVER['SERVER_PORT']}}';

                axios.get(`http://${BASE_URL}:${PORT}/api/cidades/${estado_id}`).then(({data}) => {

                    // Monta as cidades do estado
                    data.forEach(({ cidade_id, nm_cidade }) => {
                        let opt = document.createElement('option');
                        opt.value = cidade_id;
                        opt.innerHTML = nm_cidade;
                        cidades.appendChild(opt)
                    });

                });
            })
        });

        const rollbackLocalidades = () => $('#cidades').find('option').remove().end();

        (() => {
            $("#nome").keyup(function() {
                let val = $(this).val();
                $(this).val(val.toUpperCase())
            })
        })();


    </script>
@endsection
