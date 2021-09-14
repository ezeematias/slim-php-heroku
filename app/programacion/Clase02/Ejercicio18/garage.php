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
require_once "auto.php";
class Garage
{
    private $_razonSocial;
    private $_precioPorHora;
    private $_autos = array();

    public function __construct($_razonSocial, $_precioPorHora = 0, $_autos = null)
    {
        $this->_razonSocial = $_razonSocial;
        $this->_precioPorHora = $_precioPorHora;
        $this->_autos = $_autos;
    }

    public function MostrarGarage()
    {
        printf("<br>Garage {$this->_razonSocial}<br>");
        printf("Precio por hora $ {$this->_precioPorHora}<br>");
        if ($this->_autos !== null) {
            printf("Autos<br>*****");
            foreach ($this->_autos as $autoGarage) {
                $autoGarage->MostrarAuto($autoGarage);
            }
        } else {
            printf("<br>No hay autos<br>");
        }
    }

    public function Equals(Garage $miGarage, Autos $auto)
    {
        $retorno = false;
        foreach ($miGarage->_autos as $autoGarage) {

            if ($auto->Equals($auto, $autoGarage)) {
                $retorno = true;
                break;
            }
        }
        return $retorno;
    }

    public function Add(Garage $miGarage, Autos $auto)
    {
        if ($miGarage->Equals($miGarage, $auto)) {
            printf("<br>El auto ya está en el garage.<br>");
        } else {
            array_push($miGarage->_autos, $auto);
            printf("<br>El auto ingresó al garage.<br>");
        }
    }

    public function Remove(Garage $miGarage, Autos $auto)
    {
        if ($miGarage->Equals($miGarage, $auto)) {
            for ($i = 0; $i < sizeof($miGarage->_autos); $i++) {
                if ($auto->Equals($miGarage->_autos[$i], $auto)) {                   
                    unset($miGarage->_autos[$i]);                                        
                }
            }
        } else {
            printf("<br>El auto no existe.<br>");
        }
    }   
}
