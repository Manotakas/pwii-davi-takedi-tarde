<?php
    $peso = 55  ;
    $altura = 1.50;

$imc = $peso/($altura*$altura);

switch($imc){
    case $imc < 18.5:
        echo "abaixo do peso";
    break;

    case $imc >= 18.5:
        echo "Normal";
    break;

    case $imc > 25:
        echo "Obesidade Grau I";
    break;

    case $imc > 30:
        echo "Obesidade Grau II";
    break;

    case $imc > 40:
        echo "Obesidade Grau III";
    break;

}