<!-- -->
 <?php
/*
Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.

Unía Ezequiel 
*/
$operador = '/';
$op1 = 1;
$op2 = 2;

switch($operador)
{
    case '+':
        printf("La suma es ". $op1 + $op2);
        break;
    case '-':
        printf("La resta es ". $op1 - $op2);
        break;
    case '*':
        printf("La multiplicación es ". $op1 * $op2);
        break;
    case '/':
        if($op2 != 0)
        {
            printf("La división es ". $op1 / $op2);
        }else{
            printf("No se puede dividir por 0");
        }
        break;
}
?>