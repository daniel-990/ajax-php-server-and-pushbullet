<?php 

    require('conexiones.php');

    if($conexion){
        if(isset($_POST)){
            $id = $_POST['id'];
            $sql = "DELETE FROM listpost  WHERE id='$id'";
            if(mysqli_query($conexion, $sql)){
                echo "el ID borrado es: ".$id;
            }else{
                echo "Error al enviar la solicitud ".$sql. "<br>" .mysqli_error($conexion);
            }
        }else{
            echo "no hay datos!";
        }
    }else{
        echo "no esta conectado!!";
    }

?>