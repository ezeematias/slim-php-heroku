<?php
    require_once "usuario.php";
    $opcion = $_GET['Tarea'];
    $nombre = $_POST['Nombre'];
    $pass = $_POST['Contraseña'];
    $usuario = new Usuario("Prueba","Clave");
    var_dump($opcion);

    switch ($opcion) {
        case 'Mostrar':
            Usuario::MostrarUsuario($nombre);
            break;        
        case 'Crear':
            $usuario = new Usuario($nombre,$pass);
            Usuario::MostrarUsuario($usuario);
            break;
        case 'Guardar':
            break;
        default:            
            break;
    }    
?>
