<?php
    $idvariable = $_POST["idvariable"];
    $cValorVariable = $_POST["cValorVariable"];
    $cDescripcion = $_POST["cDescripcion"];
    include '../codigBD.php';
    $query = "CALL ActualizarVariable(? ,? ,? );";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("iss",$idvariable, $cValorVariable, $cDescripcion);
    $sentencia->execute();
    header("location:/admin/variables/index.php");
?>   