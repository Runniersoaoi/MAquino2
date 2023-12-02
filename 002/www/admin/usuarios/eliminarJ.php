<?php
    try {
        $idusuario = $_GET["idusuario"];
        include '../codigBD.php';
        $datos = "";
        $query = "CALL EliminarUsuario(?);";
        $sentencia = $conn -> prepare($query);
        $sentencia ->bind_param("i",$idusuario);
        $sentencia-> execute();
    } catch (\Throwable $th) {
        echo "Ocurrio un error en la base de datos";
    }
    finally{
        echo "El usuario fue eliminado";
    }
    
?>
