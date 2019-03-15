<form action="{{route('recebeQuestDadosCand')}}" method="POST">
    @csrf
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    <h5 class="modal-title" id="title"></h5>
    </div>
    <div class="modal-body">
        <div id="Q1" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="1" value="A">
                    <span class="form-check-sign" id="A1"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="1" value="B">
                    <span class="form-check-sign" id="B1"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="1" value="C">
                    <span class="form-check-sign" id="C1"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="1" value="D">
                    <span class="form-check-sign" id="D1"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="1" value="E">
                    <span class="form-check-sign" id="E1"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="1" value="F">
                    <span class="form-check-sign" id="F1"></span></label>
            </div>
        </div>
        <div id="Q2" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="2" value="A">
                    <span class="form-check-sign" id="A2"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="2" value="B">
                    <span class="form-check-sign" id="B2"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="2" value="C">
                    <span class="form-check-sign" id="C2"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="2" value="D">
                    <span class="form-check-sign" id="D2"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="2" value="E">
                    <span class="form-check-sign" id="E2"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="2" value="F">
                    <span class="form-check-sign" id="F2"></span></label>
            </div>
        </div>
        <div id="Q3" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="3" value="A">
                    <span class="form-check-sign" id="A3"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="3" value="B">
                    <span class="form-check-sign" id="B3"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="3" value="C">
                    <span class="form-check-sign" id="C3"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="3" value="D">
                    <span class="form-check-sign" id="D3"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="3" value="E">
                    <span class="form-check-sign" id="E3"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="3" value="F">
                    <span class="form-check-sign" id="F3"></span></label>
            </div>
        </div>
        <div id="Q4" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="4" value="A">
                    <span class="form-check-sign" id="A4"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="4" value="B">
                    <span class="form-check-sign" id="B4"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="4" value="C">
                    <span class="form-check-sign" id="C4"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="4" value="D">
                    <span class="form-check-sign" id="D4"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="4" value="E">
                    <span class="form-check-sign" id="E4"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="4" value="F">
                    <span class="form-check-sign" id="F4"></span></label>
            </div>
        </div>
        <div id="Q5" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="5" value="A">
                    <span class="form-check-sign" id="A5"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="5" value="B">
                    <span class="form-check-sign" id="B5"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="5" value="C">
                    <span class="form-check-sign" id="C5"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="5" value="D">
                    <span class="form-check-sign" id="D5"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="5" value="E">
                    <span class="form-check-sign" id="E5"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="5" value="F">
                    <span class="form-check-sign" id="F5"></span></label>
            </div>
        </div>
        <div id="Q6" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="6" value="A">
                    <span class="form-check-sign" id="A6"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="6" value="B">
                    <span class="form-check-sign" id="B6"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="6" value="C">
                    <span class="form-check-sign" id="C6"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="6" value="D">
                    <span class="form-check-sign" id="D6"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="6" value="E">
                    <span class="form-check-sign" id="E6"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="6" value="F">
                    <span class="form-check-sign" id="F6"></span></label>
            </div>
        </div>
        <div id="Q7" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="7" value="A">
                    <span class="form-check-sign" id="A7"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="7" value="B">
                    <span class="form-check-sign" id="B7"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="7" value="C">
                    <span class="form-check-sign" id="C7"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="7" value="D">
                    <span class="form-check-sign" id="D7"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="7" value="E">
                    <span class="form-check-sign" id="E7"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="7" value="F">
                    <span class="form-check-sign" id="F7"></span></label>
            </div>
        </div>
        <div id="Q8" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="8" value="A">
                    <span class="form-check-sign" id="A8"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="8" value="B">
                    <span class="form-check-sign" id="B8"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="8" value="C">
                    <span class="form-check-sign" id="C8"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="8" value="D">
                    <span class="form-check-sign" id="D8"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="8" value="E">
                    <span class="form-check-sign" id="E8"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="8" value="F">
                    <span class="form-check-sign" id="F8"></span></label>
            </div>
        </div>
        <div id="Q9" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="9" value="A">
                    <span class="form-check-sign" id="A9"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="9" value="B">
                    <span class="form-check-sign" id="B9"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="9" value="C">
                    <span class="form-check-sign" id="C9"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="9" value="D">
                    <span class="form-check-sign" id="D9"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="9" value="E">
                    <span class="form-check-sign" id="E9"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="9" value="F">
                    <span class="form-check-sign" id="F9"></span></label>
            </div>
        </div>
        <div id="Q10" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="10" value="A">
                    <span class="form-check-sign" id="A10"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="10" value="B">
                    <span class="form-check-sign" id="B10"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="10" value="C">
                    <span class="form-check-sign" id="C10"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="10" value="D">
                    <span class="form-check-sign" id="D10"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="10" value="E">
                    <span class="form-check-sign" id="E10"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="10" value="F">
                    <span class="form-check-sign" id="F10"></span></label>
            </div>
        </div>
        <div id="Q11" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="11" value="A">
                    <span class="form-check-sign" id="A11"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="11" value="B">
                    <span class="form-check-sign" id="B11"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="11" value="C">
                    <span class="form-check-sign" id="C11"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="11" value="D">
                    <span class="form-check-sign" id="D11"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="11" value="E">
                    <span class="form-check-sign" id="E11"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="11" value="F">
                    <span class="form-check-sign" id="F11"></span></label>
            </div>
        </div>
        <div id="Q12" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="12" value="A">
                    <span class="form-check-sign" id="A12"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="12" value="B">
                    <span class="form-check-sign" id="B12"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="12" value="C">
                    <span class="form-check-sign" id="C12"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="12" value="D">
                    <span class="form-check-sign" id="D12"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="12" value="E">
                    <span class="form-check-sign" id="E12"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="12" value="F">
                    <span class="form-check-sign" id="F12"></span></label>
            </div>
        </div>
        <div id="Q13" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="13" value="A">
                    <span class="form-check-sign" id="A13"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="13" value="B">
                    <span class="form-check-sign" id="B13"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="13" value="C">
                    <span class="form-check-sign" id="C13"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="13" value="D">
                    <span class="form-check-sign" id="D13"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="13" value="E">
                    <span class="form-check-sign" id="E13"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="13" value="F">
                    <span class="form-check-sign" id="F13"></span></label>
            </div>
        </div>
        <div id="Q14" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="14" value="A">
                    <span class="form-check-sign" id="A14"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="14" value="B">
                    <span class="form-check-sign" id="B14"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="14" value="C">
                    <span class="form-check-sign" id="C14"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="14" value="D">
                    <span class="form-check-sign" id="D14"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="14" value="E">
                    <span class="form-check-sign" id="E14"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="14" value="F">
                    <span class="form-check-sign" id="F14"></span></label>
            </div>
        </div>
        <div id="Q15" style="display: none">
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="15" value="A">
                    <span class="form-check-sign" id="A15"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="15" value="B">
                    <span class="form-check-sign" id="B15"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="15" value="C">
                    <span class="form-check-sign" id="C15"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="15" value="D">
                    <span class="form-check-sign" id="D15"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="15" value="E">
                    <span class="form-check-sign" id="E15"></span></label>
            </div>
            <div class="form-check form-check-radio">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="15" value="F">
                    <span class="form-check-sign" id="F15"></span></label>
            </div>
        </div>

        {{--DADOS CANDIDATO--}}
        <input value="{{$dadosCand->nome}}" name="nome" type="hidden">
        <input value="{{$dadosCand->telefone}}" name="telefone" type="hidden">
        <input value="{{$dadosCand->email}}" name="email" type="hidden">
        <input value="{{$dadosCand->serie}}" name="serie" type="hidden">
        <input value="{{$dadosCand->visitor}}" name="visitor" type="hidden">

    </div>
    <div class="modal-footer">
        <span></span>
        <button type="submit" class="btn btn-success" style="display: none" id="Benviar">Enviar</button>
        <button type="button" class="btn btn-primary" onclick="upEnum()" id="Bnext">Next</button>
    </div>

</form>

<script>
    $cont = 0;
    $enum = $.getJSON('/api/quest/enum', function(data){}); // Resgata Enunciados de cada questao

    function upEnum() { // Monta Enunciado
        if($cont !== 15){
            document.getElementById("title").innerHTML = $enum.responseJSON[$cont].enunciado_questao;
            $cont+=1;
            proximaQuestao();
        }
        if($cont === 15){ // Monta botao Submit
            document.getElementById("Bnext").style="display: none";
            document.getElementById("Benviar").style="display: flex";
        }
    }

    $a = 0; $b = 1; $c = 2; $d = 3; $e = 4; $f = 5; $point= 1;
    $op = $.getJSON('/api/quest/op', function(data){}); // Resgata Enunciados das Opcoes

    function proximaQuestao() { //Abre a div para cada questao
        if ($cont === 1){
            document.getElementById("Q"+$cont).style="display: block";
        }
        if($cont !== 1) {
            document.getElementById("Q"+$cont).style="display: block";
            document.getElementById("Q"+($cont-1)).style="display: none";
        }

        //Monta as opcoes de cada questao
        document.getElementById("A"+$point).innerHTML= $op.responseJSON[$a].opcao_enunciado; $a+=6;
        document.getElementById("B"+$point).innerHTML= $op.responseJSON[$b].opcao_enunciado; $b+=6;
        document.getElementById("C"+$point).innerHTML= $op.responseJSON[$c].opcao_enunciado; $c+=6;
        document.getElementById("D"+$point).innerHTML= $op.responseJSON[$d].opcao_enunciado; $d+=6;
        document.getElementById("E"+$point).innerHTML= $op.responseJSON[$e].opcao_enunciado; $e+=6;
        document.getElementById("F"+$point).innerHTML= $op.responseJSON[$f].opcao_enunciado; $f+=6;
        $point+=1;
    }
</script>
