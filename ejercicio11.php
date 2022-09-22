En este programa tendrás que utilizar un array asociativo para guardar como key cada día de la semana 
y asociar a cada día un valor entero. Se trandrá que mostrar en pantalla cada día y 
valor almacenado en el array así como la suma y media de todos los valores guadados en el array.

<?php
$array = [
    'Lunes'    => 1,
    'Martes'  => 2,
    'Miercoles'  => 3,
    'Jueves' => 4,
    'Viernes' => 5,
    'Sabado' => 6,
    'Domingo' => 7,
];

print_r($array);
echo "<br><br><br>Media: ";
print_r((array_sum($array)/count($array)));
echo "<br>Suma: ";
print_r(array_sum($array));
?>