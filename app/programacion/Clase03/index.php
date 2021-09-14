<?php
    /*
    $archivos = fopen("saludar.txt","w");
    fclose($archivos);
    
    $archivos = fopen("saludar.txt","r");
    // filesize lee todo el archivo
    echo fread($archivos, filesize("saludar.txt"));
    fclose($archivos);
    */
    $count = 0;
    $archivos = fopen("saludar.txt","r");
    while (!feof($archivos))
    {
        //Ver como no contar los espacios/saltos en blanco
        //$buffer = fgets($archivos, "<br/>");
        if(($buffer = fgets($archivos)) !== false)
        {
            echo $buffer;
            $count++;
        }
    }
    printf($count);        
    fclose($archivos);
?>