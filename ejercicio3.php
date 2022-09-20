Nuestra zapatería pondrá rebajas. Hay que cambiar los precios de todos los productos. La rebaja estará guardada en una variable y será un tanto por ciento. (20%, 50%,...) ejemplo: $rebaja = 20;
Por pantalla se imprimirán los  productos con viejo y el precio nuevo, los nuevos precios se guardarán en el array de precios (al finalizar el programa el array de precios quedará con los los precios nuevos)

<?php
$productos = array( 'Deportivas','Vestir', 'Zapatillas','Botas', 'Running');
$precios = array(20, 30, 40, 50, 30);
$preciosRebajados = array();
$rebaja = 20;

$count = count($productos);
for ($i = 0; $i < $count; $i++) {  

   $preciosRebajados[$i] = $precios[$i]*$rebaja/100;
    echo "<br>". $productos[$i] . " " . $preciosRebajados[$i];
}

?>

2da solucion
<?php
$productos=array('zapato1','zapato2','zapato3','zapato4','zapato5');
$precios=array(10,20,30,40,50);
$precioFinal=array();
$rebaja=20;
$frase="";

for($i=0;$i < count($precios); $i++){
    $total=0;
    $total=$precios[$i]*$rebaja/100;
    $precioFinal[$i]=$total;
    $frase=$frase."<br>".$productos[$i]." ".$precioFinal[$i];
}
echo $frase;
?>