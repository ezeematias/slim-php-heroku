<?php
/*
Aplicación No 19 (Auto)
Realizar una clase llamada “Auto” que posea los siguientes atributos

privados: _color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble
por parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
la suma de los precios o cero si no se pudo realizar la operación.
Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
Crear un método de clase para poder hacer el alta de un Auto, guardando los datos en un
archivo autos.csv.
Hacer los métodos necesarios en la clase Auto para poder leer el listado desde el archivo
autos.csv
Se deben cargar los datos en un array de autos.

Unía, Ezequiel.
*/
class Autos
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    public function __construct($_marca, $_color, $_precio = 0, $_fecha = NULL)
    {
        $this->_marca = $_marca;
        $this->_color = $_color;
        $this->_precio = $_precio;
        $this->_fecha = $_fecha;
    }

    public function AgregarImpuestos(int $impuesto)
    {
        $this->_precio += $impuesto;
    }

    public static function MostrarAuto(Autos $tutu)
    {
        printf("<br>--- AUTO ----------<br>");
        printf("> " . $tutu->_marca . "<br>");
        printf("> " . $tutu->_color . "<br>");
        if ($tutu->_precio > 0) {
            printf("> " . $tutu->_precio . "<br>");
        }
        if ($tutu->_fecha != null) {            
            printf("> " . $tutu->_fecha->format('d-m-Y')."<br>");
        }
        printf("----------------------<br>");
    }

    public function Equals(Autos $autoUno, Autos $autoDos)
    {
        $retorno = false;
        if ($autoDos->_marca == $autoUno->_marca) {
            $retorno = true;
        }
        return $retorno;
    }

    public static function Add(Autos $autoUno, Autos $autoDos)
    {
        $retorno = 0;
        if ($autoUno->Equals($autoUno, $autoDos) == true && $autoDos->_color == $autoUno->_color) {
            $retorno = $autoUno->_precio + $autoDos->_precio;
        } else {
            printf("<br>Los autos no se pueden sumar.<br>");
        }
        return $retorno;
    } 

    public static function AltaDeAuto (Autos $auto)
    {        
        $archivos = fopen("autos.csv","a");
        fwrite($archivos, "Marca {$auto->_marca}, Color {$auto->_color}, Precio {$auto->_precio}, Fecha  ".$auto->_fecha->format('d-m-Y')."<br>",100);
        fclose($archivos);
    }

    public static function LeerListadoAutos($listadoAutos)
    {
        $archivos = fopen("autos.csv","r");
        while (!feof($archivos))
        {
            //Ver como no contar los espacios/saltos en blanco
            //$buffer = fgets($archivos, "<br/>");
            if(($buffer = fgets($archivos)) !== false)
            {
                echo $buffer;                
            }
        }        
        fclose($archivos);
    }
}
?>