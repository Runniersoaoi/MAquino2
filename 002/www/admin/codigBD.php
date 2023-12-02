<?php
    const host = "localhost:3306";
    const user = "root";
    const pass = "c0nqu1stad0r26";
    const db = "programacion_school";

    $conn = new mysqli(host, user, pass, db);
    if($conn->connect_errno){
        die(connect_error);
      }
?>