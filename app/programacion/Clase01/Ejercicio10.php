<!-- -->
<?php
/*
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.

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