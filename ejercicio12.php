Crea un array asociativo y ordenalo dependiendo del key y del valor. Para ello has de utilizar las funciones ksort y natsort.

<?php

$array =  [
    "jordi" => "Jordi Rubio",
    "marta" => "Marta Fabra",
    "eva" => "Eva Palacio",
    "emilio" => "Emilio Morales"
];

echo "<br>";
print_r($array);
ksort($array);
foreach ($array as $key => $val) {
    echo "<br>" . "$key = $val\n";
}

natsort($array);
echo "<br>";
print_r($array);
?>