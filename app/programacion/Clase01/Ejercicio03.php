
<!--
 -->
 <?php
/*
Aplicación No 3 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”

Unía Ezequiel 
*/
/*
$a = 6;
$b = 9;
$c = 8;
*/
$a = 5;
$b = 1;
$c = 5;

if($a != $b && $b != $c && $a != $c )
{
    switch(true)
    {    
        case($a>$b && $a<$c || $a<$b && $a>$c):
        printf("Opción A ".$a);
        break;
        case($b>$a && $b<$c || $b<$a && $b>$c):
        printf("Opción B ".$b);
        break;
        case($c>$b && $c<$a || $c<$b && $c>$a):
        printf("Opción C ".$c);
        break;
    }
}else
{
    printf("No hay valor del medio");
}
?>