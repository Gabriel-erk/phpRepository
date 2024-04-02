<?php

$nota1 = 10.0;
$nota2 = 10.0;

$media = ($nota1 + $nota2) / 2;

// colocar em ordem de numeros maiores nas condições, pois o else ja joga pro negativo, por isso, nao seria necessario utilizar o && deixando eles nessa ordem
if($media == 10){
    echo "aprovado com distinção";
}

else if($media >= 7) {
    echo "aprovado";
}

else{
    echo "reprovado";
}
