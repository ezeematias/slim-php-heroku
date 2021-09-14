<!-- -->
<?php
/*
Unía Ezequiel 
*/
require_once "funciones.php";
require_once "usuario.php";

 $usuario = new Usuario();
 $usuario->nombre = "Pepe";
 MostrarUsuario($usuario); 
?>