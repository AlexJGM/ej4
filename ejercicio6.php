

<?php
$precioFinal=array();
$completo="";
$total=0;

for($i=0;$i <=10; $i++){
    $random = rand(1,99);
    $precioFinal[$i]=$random;
    $total=$total+$precioFinal[$i];
    $completo=$completo." ".$precioFinal[$i];
}


echo $completo;
echo "<br>".$total/10;

?>