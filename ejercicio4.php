Guarda en un array 10 números y saca el número más grande de todos ellos

<?php
$numeros = array (1, 2, 3, 4, 5, 6, 7, 8,9, 200);

$mayor = $numeros[count($numeros)-1];

for ($i = 0;$i < count($numeros);$i++) {
    if ($numeros[$i] > $mayor) {  
    }
}
echo $mayor;
?>