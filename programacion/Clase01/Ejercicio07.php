<!-- -->
<?php
/*
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar 
que elsalto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.

Unía Ezequiel 
*/

$count = 0;
for($i = 0; $count < 10; $i++)
{
    if($i%2 != 0)
    {
        $impares[$count] = $i;
        $count++;
    }
}

echo "ESTRUCTURA FOR<br>";
for($i = 0;$i < 10; $i++)
{           
    printf(" > ".$impares[$i]."<br/>");           
}

echo "<br>ESTRUCTURA FOREACH<br>";
foreach($impares as $impar)
{
    printf(" > ".$impar."<br/>"); 
}

echo "<br>ESTRUCTURA WHILE<br>";
$round = 0;
while($round < sizeof($impares))
{
    printf(" > ".$impares[$round]."<br/>");   
    $round++; 
}
?>