<!--
 -->
 <?php
/*
Unía Ezequiel 
*/
require "usuario.php";
require "funciones.php";
require "inicio.php";

$usuario = new Usuario();
$usuario->nombre = "Bizcocho";

Saludar($usuario->nombre);
?>