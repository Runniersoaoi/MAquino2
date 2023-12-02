<?php
    $cNombreVariable = $_POST["cNombreVariable"];
    $cValorVariable = $_POST["cValorVariable"];
    $cDescripcion = $_POST["cDescripcion"];
    include '../codigBD.php';
    $query = "CALL InsertarVariable(?,?,?);";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("sss", $cNombreVariable, $cValorVariable, $cDescripcion);
    $sentencia->execute();
    header("location:/admin/variables/index.php");
?>  