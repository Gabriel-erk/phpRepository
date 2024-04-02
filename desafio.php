<?php

$nota1= readline("digite a sua nota: \n");
$nota2= readline("digite a sua nota: \n");
$media=($nota1+$nota2)/2;
if($nota1<=10 && $nota2<=10){

echo "a media é: ".$media;
}else{
    echo"Coloca uma nota de zero a dez";
}
