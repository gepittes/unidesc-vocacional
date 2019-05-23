@extends('layouts.template_teste')
@section('conteudo')
    <div class="wrapper">
        <div class="section-form">
            <div class="container">
                <span class="title-resultado-sobre">Sobre o teste</span>
{{--                <div>--}}
{{--                    <p class="text-justify font-weight-normal sobre-teste-desc">--}}
{{--                    O <strong class="text-info">Teste Vocacional</strong> não determinará um curso específico para que você faça e assim seja bem realizado,--}}
{{--                    e também não significa que algum curso que não apareça no resultado da análise deverá ser descartado,--}}
{{--                    o teste apenas servirá como um <strong>norteador</strong>.--}}
{{--                    <br><br>--}}
{{--                    Portanto é importante que de posse do resultado de seu teste, você procure <strong>conhecer sobre os cursos apresentados</strong>,--}}
{{--                    busque na internet informações sobre os mesmos, procure profissionais já formados na área, ou até mesmo visite universidades--}}
{{--                    e converse com o coordenador do curso para ter mais informações e assim tomar uma decisão pensada e bem estruturada.--}}
{{--                    </p>--}}
{{--                </div>--}}

                <hr>

                <div class="row mb-3">
                    <div class="col">
{{--                        <strong>Caracteristica: <span class="badge badge-info">{{$caracteristicaCand->caracteristica}}</span></strong>--}}
                    </div>
                    <div class="col">
                        <strong>Cursos indicados a: <span class="badge badge-success">{{$candidato[0]->nome}}</span></strong>


                        <script type="text/javascript">
                            {{$candidato[0]->nome}}
                        </script>



                    </div>
                </div>
                <hr>

                <div class="center-content">
                    <div class="card" style="width: 60rem;">
                        <div class="card-body">
                            <p class="text-justify desc-grupo font-weight-normal">
{{--                                {{$caracteristicaCand->descricao}}--}}
                            </p>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="resultado-cursos">
{{--                    @foreach($resultadoCursosCand as $curso)--}}
{{--                        <p class="badge badge-primary ml-2">{{$curso->curso_descricao}}</p>--}}
{{--                    @endforeach--}}
                </div>
                <hr>

                <div class="center-content ml-3">
                    <a href="{{route('home')}}" class="btn btn-info"><strong>Finalizar Teste!</strong></a>
                </div>

            </div>
        </div>
    </div>

    @component('components.footer')
    @endcomponent
@endsection