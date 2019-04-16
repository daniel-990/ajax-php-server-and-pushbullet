<?php 

    require('conexiones.php');
    
    if($conexion){
        if(isset($_POST)){
            $nombre = $_POST['nombre'];
            $link = $_POST['link'];
            $autor = $_POST['autor'];
            $notas = $_POST['notas'];
            $sql = "INSERT INTO listpost (nombreblog, linkblog, autorblog, notasblog) VALUES ('$nombre','$link','$autor','$notas')";

            if($nombre == "" || $link == "" || $autor == "" || $notas == ""){
                echo "Error campos sin llenar...";
            }else{
                if(mysqli_query($conexion, $sql)){
                    echo 'Enviando Datos: '.$nombre. " / " .$link. " / " .$autor. " / " .$notas;
                }else{
                    echo "Error al enviar la solicitud ".$sql. "<br>" .mysqli_error($conexion);
                }
                mysqli_close($conexion);
            }
        }else{
            echo ' no se recivieron datos del front';
        }
    }else{
        echo "error al intentar recivir los datos";
    }

?>