<?php

$n1 = 100;
$n2 = 50;
// parenteses pois a divisao sempre vem primeiro (e nesse caso preciso priorizar a soma para depois realizar a divisão)
$resultado = ($n1 + $n2) / 2 ;

echo "a média dos valores $n1 e $n2 é: $resultado";

// utilizando função em php para realizar um numero elevado ao outro, no caso n2 é o expoente, ou seja, n1 é elevado a n2
echo "o numero $n1 elevado a $n2 é:" .pow($n1,$n2);

echo "o resto da divisao de $n1 por $n2 é:" .$n1 % $n2;