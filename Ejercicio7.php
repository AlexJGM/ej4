Hasta ahora para visualizar el contenido de una variable hemos utilizado echo o print. 
En el caso de los arrays se puede utilizar la orden print_r($array) para visualizar el contenido del array junto con su índice. 
Se debe realizar un programa que cree un array con 10 números aleatorios (números entre 1 y 200) los imprima de las dos formas que aparecen en pantalla y después los imprima al revés.  

<?php
    
$numeros = array();

for ($i = 0; $i <= 10;$i++) {
    $random = rand(1,200);
    $numeros[$i] = $random;
    echo $numeros[$i] . "<br>";
}
print_r($numeros);

for ($i = count($numeros)-1;$i >=0;$i--) {
    echo "<br>" . $numeros[$i];

}
?>