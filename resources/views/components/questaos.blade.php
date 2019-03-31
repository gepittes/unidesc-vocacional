<form action="{{route('recebe.questoes.cand')}}" method="POST">
    @csrf
    <div class="modal-header">
    <h5 class="modal-title" id="title"></h5>
    </div>
    <div class="modal-body">
        {{--MONTA O A DIV PARA CADA QUESTAO--}}
        @for($i = 1; $i <= 15; $i++)
            <div id="Q{{$i}}" style="display: none">
                <div class="form-check form-check-radio">
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="{{$i}}" value="A">
                        <span class="form-check-sign" id="A{{$i}}"></span></label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="{{$i}}" value="B">
                        <span class="form-check-sign" id="B{{$i}}"></span></label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="{{$i}}" value="C">
                        <span class="form-check-sign" id="C{{$i}}"></span></label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="{{$i}}" value="D">
                        <span class="form-check-sign" id="D{{$i}}"></span></label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="{{$i}}" value="E">
                        <span class="form-check-sign" id="E{{$i}}"></span></label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="{{$i}}" value="F">
                        <span class="form-check-sign" id="F{{$i}}"></span></label>
                </div>
            </div>
        @endfor

    </div>
    <div class="modal-footer">
        <span></span>
        <div class="alertQ" role="alert" style="display: none" id="alert">Opa! escolha uma opção para continuar.</div>
        <div class="alertQ qfim"  style="display: none"  id="msgfinal">Sucesso! Chegamos na última questão antes de liberar para envio.</div>
        <button type="submit" class="btn btn-success" style="display: none" id="Benviar">Enviar</button>
        <button type="button" class="btn btn-primary" id="Bnext">Próximo</button>
    </div>

</form>

<script>

    {{-- Validacao dos Opcoes --}}
    $(document).ready(function(){
        document.getElementById("Bnext").onclick = function() { // validar o radio
            var radios = document.getElementsByName($cont);
            $aviso=1;
            for (var i = 0; i < radios.length; i++) {
                if (radios[i].checked) { // verificar se o radio  foi selecionado
                    upEnum();
                    document.getElementById("alert").style="display: node";
                }
            }
            $aviso ++;
            if($aviso <= 1) {
              document.getElementById("alert").style = "display: none";
                $aviso=1;
            }else {
                document.getElementById("alert").style = "display: flex";
            }
        };
    });


    $('input[name="15"]').change(function () {
        $fim = $('input[name="15"]:checked').val();
        if ($fim !== true) {
            document.getElementById("Benviar").style="display: flex";
        }

    });

    {{--Abre o Modal das Questoes--}}
    function startQuestoes() {
        $('#questoes').modal('show');
        upEnum();
    }

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
            document.getElementById("msgfinal").style="display: flex";
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
        $aviso = 0;
    }
</script>
