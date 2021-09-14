<?php
/*
Aplicación No 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.

Unía Ezequiel
*/
require "funciones13.php";
$palabra1 = "Recuperatorio";
$palabra2 = "Parcial";
$palabra3 = "Programacion";
$palabra4 = "Hola";
$palabra5 = "Numeros";
if(invertirPalabra($palabra1,13) == 0)
{
    printf("La palabra ".$palabra1." NO pertenece. <br>");
}
if(invertirPalabra($palabra2,7) == 0)
{
    printf("La palabra ".$palabra2." NO pertenece. <br>");
}
if(invertirPalabra($palabra3,12) == 0)
{
    printf("La palabra ".$palabra3." NO pertenece. <br>");
}
if(invertirPalabra($palabra4,4) == 0)
{
    printf("La palabra ".$palabra4." NO pertenece. <br>");
}
if(invertirPalabra($palabra5,2) == 0)
{
    printf("La palabra ".$palabra5." NO pertenece. <br>");
}
?>