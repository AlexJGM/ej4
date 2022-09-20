Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:
nombre, apellido y DNI.
Hay que meter todos los datos en un array y después visualizarlos por pantalla en formato tabla.


<?php
$nombre = "Luis";
$nombre2 = "Carlos";
$apellido ="Martinez";
$apellido2 ="Alvarez";
$dni ="11111111E";
$dni2 = "22222222R";

$tabla = [
    ['Nombre','Apellido','dni' ],
    [
        'Nombre' => $nombre,
        'Apellido' => $apellido,
        'dni' => $dni,
    ],
    [
        'Nombre' => $nombre2,
        'Apellido' => $apellido2,
        'dni' => $dni2,
    ],
];

$s = '<table border="1">';
foreach ( $tabla as $r ) {
    $s .= '<tr>';
    foreach ( $r as $v ) {
        $s .= '<td>'.$v.'</td>';
    }
    $s .= '</tr>';
}
$s .= '</table>';
echo $s;