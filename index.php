<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula12/08</title>
</head>
<body>
    <?php
        $listaFrutas = ["UVA","MACA", "ABACATE", "FRUTA"];

        $tamanhoDaLista = count($listaFrutas);

        for($contadorFrutas=0; $contadorFrutas<$tamanhoDaLista; $contadorFrutas++){

            echo "<br>Essa é a fruta $listaFrutas[$contadorFrutas]<br>";
        }

        foreach($listaFrutas as $index => $fruta){
            echo "<br>COM O FOREACH Essa é a fruta na posicao $index °- $fruta<br>";
          
        }
        funcion exibeMensagem($vaorParaFuncaoMensagem){
            echo "exiba uma menssagem e o valor recebido $vaorParaFuncaoMensagem <br><br><br><br>"

        }
        $vaorParaFuncaoMensagem = 50;
        exibeMensagem
        ($vaorParaFuncaoMensagem);
    ?>
</body>
</html>