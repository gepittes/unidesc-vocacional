@extends('layouts.templete')

@section('conteudo')
    <div class="wrapper">
        <div class="section-form">
            <div class="container">
                <span class="title-resultado-sobre">Sobre o teste</span>
                <div>
                    <p class="text-justify font-weight-normal sobre-teste-desc">
                    O <strong class="text-info">Teste Vocacional</strong> não determinará um curso específico para que você faça e assim seja bem realizado,
                    e também não significa que algum curso que não apareça no resultado da análise deverá ser descartado,
                    o teste apenas servirá como um <strong>norteador</strong>.
                    <br><br>
                    Portanto é importante que de posse do resultado de seu teste, você procure <strong>conhecer sobre os cursos apresentados</strong>,
                    busque na internet informações sobre os mesmos, procure profissionais já formados na área, ou até mesmo visite universidades
                    e converse com o coordenador do curso para ter mais informações e assim tomar uma decisão pensada e bem estruturada.
                    </p>
                </div>

                <hr>

                <div class="row mb-3">
                    <div class="col">
                        <strong>Caracteristica: <span class="badge badge-info">Aqui vem!</span></strong>
                    </div>
                    <div class="col">
                        <strong>Cursos indicados a: <span class="badge badge-success">{{$dadosCandDB->nome}}</span></strong>
                    </div>
                </div>
                <hr>

                <div class="center-content">
                    <div class="card" style="width: 60rem;">
                        <div class="card-body">
                            {{--todo chamar descricao do grupo do curso--}}
                            <p class="text-justify desc-grupo font-weight-normal">
                                É intuitivo, sonhador, aberto a experiências e foge das convenções sociais. Possui percepção aguçada e interesse em atividades que envolvam imaginação, beleza, produção artística ou inovação. Gosta de se expressar através de meios como música, teatro, dança, desenho, poesia e canto. Valoriza o prazer e as emoções. Aprecia o contato interpessoal, quando está seguro de poder expressar-se livremente. É aberto a estímulos subjetivos e emocionais, capaz de perceber as reações das pessoas através de compreensão empática.
                            </p>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="center-content">
                    @foreach($resultadoCursosCand as $curso )
                        <p class="badge badge-primary ml-2">{{$curso->curso_descricao}}</p>
                    @endforeach
                </div>
                <hr>

            </div>
        </div>
    </div>

    @component('layouts.footer')
    @endcomponent
@endsection