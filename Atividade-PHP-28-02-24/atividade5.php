
<?php

// array_filter()
// Filtra elementos de um array usando uma função de callback.
$numbers = [1, 2, 3, 4, 5, 6];
$evenNumbers = array_filter($numbers, function ($num) {
    return $num % 2 == 0;
});
print_r($evenNumbers);
echo "<hr>";

// array_push()
// Adiciona um ou mais elementos no final de um array.
$stack = ["orange", "banana"];
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "<hr>";

// array_pop()
// Remove e retorna o último elemento de um array.
$stack = ["orange", "banana", "apple", "raspberry"];
$fruit = array_pop($stack);
print_r($stack);
echo "<hr>";

// array_unshift()
// Adiciona um ou mais elementos no início de um array.
$queue = ["orange", "banana"];
array_unshift($queue, "apple", "raspberry");
print_r($queue);
echo "<hr>";

// array_shift()
// Remove e retorna o primeiro elemento de um array.
$queue = ["apple", "raspberry", "orange", "banana"];
$fruit = array_shift($queue);
print_r($queue);
echo "<hr>";

// array_reverse()
// Inverte a ordem dos elementos de um array.
$numbers = [1, 2, 3, 4, 5];
$reversedNumbers = array_reverse($numbers);
print_r($reversedNumbers);
echo "<hr>";

// array_merge()
// Combina um ou mais arrays em um único array.
$array1 = ['a', 'b', 'c'];
$array2 = [1, 2, 3];
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);
echo "<hr>";

// array_map()
// Aplica uma função em cada elemento de um ou mais arrays.
$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map(function ($num) {
    return $num * $num;
}, $numbers);
print_r($squaredNumbers);
echo "<hr>";

// in_array()
// Verifica se um valor existe em um array.
$fruits = ["apple", "banana", "orange"];
if (in_array("banana", $fruits)) {
    echo "Found banana!";
}
echo "<hr>";

// asort()
// Ordena um array mantendo a associação entre índices e valores.
$ages = ["Peter" => 32, "John" => 28, "Doe" => 45];
asort($ages);
print_r($ages);
echo "<hr>";

// arsort()
// Ordena um array em ordem reversa mantendo a associação entre índices e valores.
$ages = ["Peter" => 32, "John" => 28, "Doe" => 45];
arsort($ages);
print_r($ages);
echo "<hr>";

// ksort()
// Ordena um array pelos seus índices.
$fruits = ["banana", "apple", "orange"];
ksort($fruits);
print_r($fruits);
echo "<hr>";

// krsort()
// Ordena um array pelos seus índices em ordem reversa.
$fruits = ["banana", "apple", "orange"];
krsort($fruits);
print_r($fruits);
echo "<hr>";

// sort()
// Ordena um array.
$numbers = [4, 2, 8, 6];
sort($numbers);
print_r($numbers);
echo "<hr>";

// rsort()
// Ordena um array em ordem reversa.
$numbers = [4, 2, 8, 6];
rsort($numbers);
print_r($numbers);
echo "<hr>";

?>
