<?php
/*Crear un arreglo unidimensional de 5 valores enteros e imprimir el promedio y mostrarlos
ordenados descendentemente.*/


$array = array(4, 6, 2, 8, 10);

// Calcular el promedio del arreglo
$sum = array_sum($array);
$count = count($array);
$promedio = $sum / $count;


rsort($array);

echo "Promedio: " . $promedio . "\n";
echo "Arreglo ordenado descendentemente: " . implode(", ", $array) . "\n";
?>