Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la minima.

<?php
$numeros=array();
$completo="";



for($i=0;$i <=10; $i++){
    $random = rand(1,99);
    $numeros[$i]=$random;
    $completo=$completo." ".$numeros[$i];
    $menor = $numeros[count($numeros)-1];
}

for ($i = 0;$i < count($numeros);$i++) {
    if ($numeros[$i] > $menor) {
    }
}

echo $completo;
echo "<br>". $menor;

?>