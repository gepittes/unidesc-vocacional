@extends('layouts.template_teste')

@section('conteudo')

<div class="wrapper">
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
                            <a href="{{route('home')}}"><button type="button" class="btn btn-info btn-rp-inicio"><strong>Inicio</strong></button></a>
                        </div>
                    </div>
                </div><hr>

                <form action="{{route('recebe.form.cand')}}" METHOD="POST">
                        @csrf
                        {{--NOME COMPLETO--}}
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="nome">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome" value="{{old('nome')}}">
                                @if($errors->has('nome'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('nome') }}</span>
                                @endif
                            </div>
                            {{--TELEFONE--}}
                            <div class="form-group col">
                                <label for="telefone">Telefone Celular</label>
                                <input type="text" class="form-control phone_with_ddd" id="telefone" name="telefone" placeholder="(DD) 00000-0000" value="{{old('telefone')}}">
                                @if($errors->has('telefone'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('telefone') }}</span>
                                @endif
                            </div>
                            {{--EMAIL--}}
                            <div class="form-group col">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nome@gmail.com" value="{{old('email')}}">
                                @if($errors->has('email'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        {{--CIDADE--}}
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="cidade">Cidade</label>
                                <select class="form-control" id="cidade" name="cidade">
                                    @if(old('cidade'))
                                    @else
                                        <option value="" selected>Selecionar</option>
                                    @endif

                                    @foreach($cidades as $cidade)
                                        @if($cidade->nome == old('cidade'))
                                            <option value="{{old('cidade')}}" selected>{{old('cidade')}}</option>
                                        @else
                                            <option value="{{$cidade->nome}}">{{$cidade->nome}}</option>
                                        @endif
                                    @endforeach

                                </select>
                                @if($errors->has('cidade'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('cidade') }}</span>
                                @endif
                            </div>
                            {{--SERIE--}}
                            <div class="form-group col">
                                <label for="serie">Serie</label>
                                <select class="form-control" id="serie" name="serie">

                                    @if(old('serie'))
                                    @else
                                        <option value="" selected>Selecionar</option>
                                    @endif
                                        <optgroup label="Ensino Fundamental">
                                            @foreach($seriesFundamental as $ano)
                                                @if($ano->serie == old('serie'))
                                                    <option value="{{old('serie')}}" selected>{{old('serie')}}º</option>
                                                @else
                                                    <option value="{{$ano->serie}}">{{$ano->serie}}º</option>
                                                @endif
                                            @endforeach
                                        </optgroup>

                                        <optgroup label="Ensino Medio">
                                            @foreach($seriesMedio as $ano)
                                                {{-- RECUPERACAO FORM --}}
                                                @if($ano->serie == old('serie'))
                                                    <option value="{{old('serie')}}" selected>{{old('serie') == "concluido" ? 'Concluido' : $ano->serie."º"}}</option>
                                                @else
                                                    {{--  EXIBICAO  --}}
                                                     @if($ano->serie == 'concluido')
                                                        <option value="{{$ano->serie}}">Concluido</option>
                                                     @else
                                                        <option value="{{$ano->serie}}">{{$ano->serie}}º</option>
                                                     @endif
                                                @endif
                                            @endforeach
                                        </optgroup>
                                </select>
                                @if($errors->has('serie'))
                                    <span class="badge badge-danger space-error-bg">{{ $errors->first('serie') }}</span>
                                @endif
                            </div>
                            {{--IP Adress--}}
                            <input value="{{$_SERVER['REMOTE_ADDR']}}" name="visitor" type="hidden">
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-rp-submit">Enviar</button>
                            </div>
                        </div>
                </form>
        </div>
    </div>
</div>

@component('components.footer_simple')
@endcomponent

@endsection