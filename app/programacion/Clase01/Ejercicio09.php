<!-- -->
<?php
/*
Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.

Unía Ezequiel 
*/

$lapicera1 = ['color'=> 'Azul', 'marca'=> 'Bic', 'trazo' => 'Fino', 'precio' => 25];
$lapicera2 = ['color'=> 'Rojo', 'marca'=> 'Paker', 'trazo' => 'Grieso', 'precio' => 55];
$lapicera3 = ['color'=> 'Verde', 'marca'=> 'Castell', 'trazo' => 'Medio', 'precio' => 35];

$lapiceras = array($lapicera1, $lapicera2, $lapicera3);
for($i = 0; $i < sizeof($lapiceras);$i++)
{
    printf(" > ");
    print_r($lapiceras[$i]);
    printf("<br>");
}
?>