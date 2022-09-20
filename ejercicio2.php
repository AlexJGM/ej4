En una zapatería sólo se venden 5 productos. Tengo los productos y los precios guardados en 2 arrays (en uno los productos y en otro los precios). Hay que visualizar cada producto con su precio.


<?php

$productos = array( 'Deportivas','Vestir', 'Zapatillas','Botas', 'Running');
$precio = array(20, 30, 40, 50, 30);

$count = count($productos);
for ($i = 0; $i < $count; $i++) {
    echo "<br>". $productos[$i].$precio[$i];

}
?>