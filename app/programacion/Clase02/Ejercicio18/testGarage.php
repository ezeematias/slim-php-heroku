<?php
/*
Aplicación No 18 (Auto - Garage)
Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos.

Unía, Ezequiel
*/
require "auto.php";
require "garage.php";
$autoUno = new Autos("BMW", "Verde");
$autoDos = new Autos("Fiat", "Blanco");
$autoTres = new Autos("Mercedes Benz", "Negro");
$autoCuatro = new Autos("Peugeot", "Rojo");
$autoCinco = new Autos("Audi", "Azul");
$autoSeis = new Autos("Renault", "Marron");
$autos = array($autoUno,$autoDos,$autoTres,$autoCuatro,$autoCinco);
$miGarage = new Garage("Los Pedritos SRL",300,$autos);
$miGarage->MostrarGarage($miGarage);
if($miGarage->Equals($miGarage,$autoTres))
{    
    printf("<br>El auto está en el garage.<br>");
}else{
    printf("<br>El auto no existe en el garage.<br>");    
}
if($miGarage->Equals($miGarage,$autoSeis))
{    
    printf("<br>El auto está en el garage.<br>");
}else{
    printf("<br>El auto no existe en el garage.<br>");    
}
$miGarage->Add($miGarage,$autoCuatro);
$miGarage->Add($miGarage,$autoSeis);
$miGarage->MostrarGarage($miGarage);
$miGarage->Remove($miGarage,$autoDos);
$miGarage->MostrarGarage($miGarage);




