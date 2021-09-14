<!--
 -->
 <?php
/*
Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.

Unía Ezequiel 


*/
  $suma=0;
  $cantidad=null;  
  
  while($suma < 1000)
  {
    $suma = $suma + $cantidad;
    $cantidad = $cantidad + 1;
  }
  
printf("<br>la suma es ".$suma);
printf("<br>la cantidad es ".$cantidad);
?>