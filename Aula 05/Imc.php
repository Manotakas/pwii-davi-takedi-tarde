<?php
    $peso = 57;
    $altura = 1.70;

$imc = $peso/($altura*$altura);

    if ($imc < 18.5){
        echo "seu imc é " ,$imc, ", e voce esta abaixo do normal";
    }
    elseif ($imc >= 18.5 && $imc < 25){
        echo "seu imc é " ,$imc, ", e voce esta normal";
    }
    elseif ($imc >= 25 && $imc<30 ){
        echo "seu imc é " ,$imc, ", e voce esta obeso de grau I";
    }

    elseif ($imc >= 30 && $imc <40){
        echo "seu imc é " ,$imc, ", e voce esta obeso de grau II";
    }

    elseif ($imc >=$imc40 ){
        echo "seu imc é " ,$imc, ", e voce esta obeso de grau III";
    }
    

