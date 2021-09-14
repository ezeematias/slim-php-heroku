<!-- -->
<?php
/*
Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

Unía Ezequiel 
*/
$num = 33;
$decena = substr($num, 0, 1);
$unidad = substr($num, 1, 2);
$aux = true;

switch($decena)
{
    case 2:
        if($unidad < 4)
        {
            echo "Veinti";
            $aux = false;
        }else
        {
            echo "Veinte";
        }
        break;
    case 3:
        if($unidad < 4)
        {
            echo "Treinti";
            $aux = false;
        }else
        {
            echo "Treinta";
        }
        break;
    case 4:
        echo "Cuarenta";
        break;
    case 5:
        echo "Cincuenta";
        break;
    case 6:
        echo "Sesenta";
        break;
}
if($unidad != 0 && $aux == true)
{
    echo " y ";
}
switch($unidad)
{
    case 1:
        echo "uno";
        break;
    case 2:
        echo "dos";
        break;
    case 3:
        echo "tres";
        break;
    case 4:
        echo "cuatro";
        break;    
    case 5:
        echo "cinco";
        break;
    case 6:        
        echo "seis";
        break;
    case 7:        
        echo "siete";
        break;
    case 8:        
        echo "ocho";
        break;
    case 9:        
        echo "nueve";
        break;
}
?>