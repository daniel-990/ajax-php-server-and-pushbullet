<?php 

    /**para evitar el bloqueo de cors para origenes desconocidos */
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    require('conexiones.php');

    $sql = "SELECT nombreblog, linkblog, autorblog, notasblog, id FROM listpost";
    $datos = array();
    $result = $conexion->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            array_push($datos,$row);
        }
        echo json_encode($datos);
    }else{
        echo json_encode("0 resultados");
    }

?>