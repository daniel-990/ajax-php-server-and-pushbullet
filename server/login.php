<?php 

    /**
     * login de usuario
     */

    require('conexiones.php');

    if($conexion){
        if(isset($_POST)){
            $correo = $_POST['correo'];
            $pass = $_POST['password'];
            
            echo 'correo: '.$correo.' - pass: '.$pass;
        }
    }else{
        echo "no existe conector";
    }


?>