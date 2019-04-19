<?php 

require('conexiones.php');

    if($conexion){
        if(isset($_POST)){
            $nombre = $_POST['nombre'];
            $link = $_POST['link'];
            $autor = $_POST['autor'];
            $notas = $_POST['notas'];
            $id = $_POST['id'];

            $sql = "UPDATE listpost SET nombreblog='$nombre', linkblog='$link', autorblog='$autor', notasblog='$notas' WHERE id='$id'";
            if(mysqli_query($conexion, $sql)){
                echo "nombre: ".$nombre.  " / " . $id ."\n";
                echo "link: ".$link.  " / " . $id ."\n";
                echo "autor: ".$autor.  " / " . $id ."\n";
                echo "notas: ".$notas.  " / " . $id ."\n";
            }else{
                echo "Error al enviar la solicitud ".$sql. "<br>" .mysqli_error($conexion);
            }
        }else{
            echo "no hay datos";
        }       

    }else{
        echo "no existe conexion con la base de datos";
    }

?>