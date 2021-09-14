<?php
/*
Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.

Unía Ezequiel 
*/
function CaracteresReversa(array $array)
{
    $yarra = array_reverse($array);
    return $yarra; 
}

function print_a($array)
{
    foreach($array as $all)
    {
        printf($all);
    }
}
?>