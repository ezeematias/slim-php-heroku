<!--
 -->
 <?php
/*
Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.

Unía Ezequiel 
*/

$fecha = new DateTime();
$Otoño = new DateTime('21 March');
$Invierno = new DateTime('21 June');
$Primavera = new DateTime('21 September');
$Verano = new DateTime('21 December');

switch(true)
{
    case $fecha >= $Primavera && $fecha < $Verano:
        echo 'Primavera';
        break;
    case $fecha >= $Verano && $fecha < $Otoño:
        echo 'Verano';
        break;
    case $fecha >= $Otoño && $fecha < $Invierno:
        echo 'Otoño';
        break;
    case $fecha >= $Invierno && $fecha < $Primavera:
        echo 'Invierno';
}
?>