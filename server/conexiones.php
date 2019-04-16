<?php 


    /**
     * conexiones a mi base de datos
     */

    $servidor = "pruebas-app.cloudaccess.host";
    $usuario = "zmmqbkdz";
    $password = "9L]I+6zX47iNgm";
    $basededatos = "zmmqbkdz";

    $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

    if(!$conexion){
        echo "no se detecto conexion a la base de datos.";
        exit;
    }

?>