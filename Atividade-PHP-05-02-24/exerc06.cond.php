<?php

$n1 = 98;
$n2 = 920000;
$n3 = 100000;

if ($n1 >= $n2 && $n1 >= $n3) {
    if ($n2 >= $n3) {
        echo "$n1, $n2, $n3";
    } else {
        echo "$n1, $n3, $n2";
    }
}

if ($n2 >= $n1 && $n2 >= $n3) {
    if ($n1 >= $n3) {
        echo "$n2, $n1, $n3";
    } else {
        echo "$n2, $n3, $n1";
    }
}

if ($n3 >= $n1 && $n3 >= $n2) {
    if ($n2 >= $n1) {
        echo "$n3, $n2, $n1";
    } else {
        echo "$n3, $n1, $n2";
    }
}

echo "<hr>";

//if ternario, utilizado em informação em linha, informação linear, em situaçoes de bloco ja nao é util
if ($n1 >= $n2 && $n1 >= $n3) {
    // isolando a condição e a string que sera concatenada
    echo "Ordem: $n1," . ($n2 >= $n3 ? "$n2, $n3" : "$n3, $n2");
} 
// e vai seguindo nessa logica
else if ($n2 >= $n1 && $n2 >= $n3) {
    echo "Ordem: $n2," . ($n1 >= $n3 ? "$n1, $n3" : "$n3, $n1");
}
else{
    echo "Ordem: $n3," . ($n1 >= $n2 ? "$n1, $n2":"$n2, $n1");
}
