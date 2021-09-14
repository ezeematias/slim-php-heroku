<?php
class Usuario
{
    private $_nombre;
    private $_pass;
    public function __construct($_nombre,$_pass)
    {
        $this->_nombre = $_nombre;     
        $this->_pass = $_pass;     
    }

    public static function MostrarUsuario(Usuario $usuario)
    {
        printf("--- USUARIO -------\n");
        printf("> ". $usuario->_nombre."\n");
        printf("> ". $usuario->_pass."\n");
        printf("-------------------\n");
    }
}
?>
