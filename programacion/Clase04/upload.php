<?php
//var_dump($_FILES);
//Pendiente crear un directorio y cambiarle el nombre al file.
// Extraer extension, usar explode
//$extension = $_FILES;

//Obtengo el archivo y el nombre
$file_name = $_FILES["archivo"]["name"];
$nombre = $_POST['name'];

//Con método Explode
$newNema = explode(".",$file_name);
$extension = end($newNema);
//var_dump($newNema);
//var_dump($extension);
//---------------//

//Con método PATHINFO
//$extension = pathinfo($file_name, PATHINFO_EXTENSION);
//---------------//

//Ruta destino
$destino = "uploads/".$nombre.".".$extension;

//Guarda el archivo
if(move_uploaded_file($_FILES["archivo"]["tmp_name"],$destino))
{
    echo "Subio correctamente el archivo";
}else{
    echo "Falló la carga";
}
?>