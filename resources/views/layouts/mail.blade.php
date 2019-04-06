
{{--

Observação:

        Essa layouts está  usando style em linha devido ser especial para envio de e-mail,
        sabemos que em boas práticas o correto é usar o style externo.


--}}

<!DOCTYPE html>
<html lang="pt-br">
<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</header>

<body style="margin: 0;font-weight: 400;color: #212529;text-align: left; background-color: #fff;">
<div style="max-width: 500px;padding: 15px;margin: auto;">

    <div style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;margin: -15px;">
        <div style="width:600px;
                        display: -ms-flexbox;
                        display: flex;
                        -ms-flex-direction: column;
                        flex-direction: column;
                        min-width: 0;
                        background-color: #fff;
                        background-clip: border-box;
                        border: 1px solid rgba(0,0,0,.125);
                        border-radius: .25rem;">
            <div>
                <img src="https://i.imgur.com/NFGKQ1I.jpg"style="width: 100%;" alt="Teste Vocacional">
                <div style="padding: 1.25rem;">
                    <b style="margin-bottom: .75rem;">Teste Vocacional da Unidesc</b>
                    <p class="card-text">   Olá {{$data[1]->nome}} muito obrigado por ter participado.</p>
                    <div >
                        <b>Suas informações:</b>
                        <div><br>
                            <b>Nome: </b><i>{{$data[1]->nome}}</i><br>
                            <b>Telefone: </b><i>{{$data[1]->telefone}}</i><br>
                            <b>E-mail: </b><i>{{$data[1]->email}}</i><br>
                            <b>Cidade: </b><i>{{$data[1]->cidade}}</i><br>
                        </div>
                    </div>
                    <div><br>
                        <b>Resultado:</b>
                        <ul style="padding-left: 0;margin: 2px 0;">
                            @foreach($data[0] as $curso)
                                <li style="
                                    display: inline-block;
                                    padding: 3px;
                                    margin-left: 0;
                                    font-size: 75%;
                                    font-weight: 700;
                                    margin: -38px;
                                    text-align: center;
                                    white-space: nowrap;
                                    vertical-align: baseline;
                                    border-radius: .25rem;
                                    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                    color: #fff;
                                    background-color: #007bff;">{{$curso->curso_descricao}}</li><br>

                            @endforeach
                        </ul>
                    <div>
                        <b>Caracteristica:</b>
                        <span style="color: #fff;
                                    display: inline-block;
                                    padding: 3px;
                                    font-size: 75%;
                                    font-weight: 700;
                                    text-align: center;
                                    white-space: nowrap;
                                    vertical-align: baseline;
                                    border-radius: .25rem;
                                    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                      background-color: #17a2b8;">{{$data[2][0]->caracteristica}}</span>
                    </div>
                    <div>
                        <p style="/*box-shadow: 0 1px 9px -3px */ border: 1px solid rgba(0,0,0,.125);font-weight: 400;text-align: justify ;padding: 15px;background-color: #fff">
                            {{$data[2][0]->descricao}}
                        </p>
                    </div>
                    <div style="text-align: center!important;
                            background-color: #fff;
                            border: 1px solid rgba(0,0,0,.125);
                            border-radius: .25rem;">
                        <div style="background-color: darkgray; padding: 5px 0;">
                            Telefone:(61) 3878-3100 <br/>
                            Rodovia BR-040 (Acesso à Cidade Ocidental) Jardim Flamboyant <br/>
                            Cidade Ocidental - Goiás  <br/>
                            <a href="http://www.unidesc.edu.br/" target="_blank" >www.unidesc.edu.br</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>