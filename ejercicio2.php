<?php 
/*Crear un arreglo multidimensional 4*5, llenarlo de valores decimales, y sumar sus filas y
columnas.*/

$array = array();

for ($i = 0; $i < 4; $i++) {
  for ($j = 0; $j < 5; $j++) {
    $array[$i][$j] = (float) rand() / (float) getrandmax();
  }
}


$fila_sums = array();
$column_sums = array();

for ($i = 0; $i < 4; $i++) {
  $fila_sum = 0;
  for ($j = 0; $j < 5; $j++) {
    $fila_sum += $array[$i][$j];
    if (!isset($column_sums[$j])) {
      $column_sums[$j] = 0;
    }
    $column_sums[$j] += $array[$i][$j];
  }
  $fila_sums[] = $fila_sum;
}

print_r($fila_sums);
print_r($column_sums);




?>