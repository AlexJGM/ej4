Programa que guarde 50 números aleatorios (rango del 0 al 49) en una tabla
Luego tiene que indicar cuántas veces aparece cada número en el array.


<?php
$array = array();


for ($i = 0; $i <= 50; $i++) {
    $numeros = rand(0,49);
    $array[$i] = $numeros;  
    
    echo "<br>" . $array[$i];
  
}
echo "<br>";
print_r (array_count_values($array));

?>