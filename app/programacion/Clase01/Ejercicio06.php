<!-- -->
<?php
/*
Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.

Unía Ezequiel 
*/

$array = array(rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10));
$promedio = 0;
$aux = null;

for($i = 0; $i < 5; $i++)
{
    $promedio += $array[$i];
}
$promedio /= 5;
if($promedio > 6)
{
    $aux = "mayor.";
}else if($promedio < 6)
{
    $aux = "menor.";
}else{
    $aux = "igual.";
}
echo "El promedio (".$promedio.") es ".$aux;
?>