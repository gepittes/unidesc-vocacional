@extends('layouts.templete')

@section('conteudo')
    <div class="wrapper">
        <div class="section-form">
            <div class="container">
                <span class="title-resultado-sobre">Sobre o teste</span><hr>
                <span class="title-resultado-sobre">Parabens {{$dadosCandDB->nome}}</span><hr>

                @foreach($resultadoCursosCand as $curso )
                    <p class="h5">{{$curso->curso_descricao}}</p>
                @endforeach

            </div>
        </div>
    </div>

    @component('layouts.footer')
    @endcomponent
@endsection