@extends('layouts.template_teste')
{{$title = ''}}

<html>
<header>

    <!-- temp -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- temp -->
</header>

</body>
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width:600px;">
            <img src="https://i.imgur.com/BXlRZe2.jpg" class="card-img-top" alt="Teste Vocacional">
            <div class="card-body">
                <h5 class="card-title">Teste Vocacional da Unidesc</h5>
                <p class="card-text">   Olá {{$data[1]->nome}} muito obrigado por ter participado.</p>
                <div >
                    <h5>Suas informações</h5>
                    <p class="font-weight-bold" style="margin-bottom: 0;">Nome: <strong  class="font-weight-normal">{{$data[1]->nome}}</strong></p>
                    <p class="font-weight-bold" style="margin-bottom: 0;">Telefone: <strong  class="font-weight-normal">{{$data[1]->telefone}}</strong></p>
                    <p class="font-weight-bold" style="margin-bottom: 0;">E-mail: <strong  class="font-weight-normal">{{$data[1]->email}}</strong></p>
                    <p class="font-weight-bold" style="margin-bottom: 0;">Cidade: <strong  class="font-weight-normal">{{$data[1]->cidade}}</strong></p><br>

                </div>
                <div >
                    <strong>Resultado: <span>
                        @foreach($data[0] as $curso)
                                <p class="badge badge-primary ml-2">{{$curso->curso_descricao}}</p>
                            @endforeach
                   </span>

                    </strong>
                </div>
                <strong>Caracteristica: <span class="badge badge-info">{{$data[2][0]->caracteristica}}</span></strong>
                <div class="card-body">
                    <p class="text-justify desc-grupo font-weight-normal">
                        {{$data[2][0]->descricao}}
                    </p>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body" style="background-color: darkgray;">
                    Telefone:(61) 3878-3100 <br/>
                    Rodovia BR-040 (Acesso à Cidade Ocidental) Jardim Flamboyant <br/>
                    Cidade Ocidental - Goiás  <br/>
                    <a href="http://www.unidesc.edu.br/" target="_blank" >www.unidesc.edu.br<a></a>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>