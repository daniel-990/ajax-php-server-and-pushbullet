<?php 

require('conexiones.php');

    if($conexion){
        if(isset($_POST)){
            $nombre = $_POST['nombre'];
            $link = $_POST['link'];
            $autor = $_POST['autor'];
            $notas = $_POST['notas'];
            $id = $_POST['id'];

            echo "datos: ".$nombre . " / " . $id;
        }else{
            echo "no hay datos";
        }       

    }else{
        echo "no existe conexion con la base de datos";
    }

?>