
<?php
    include '../headerA.php';
?>
<?php
    include '../codigBD.php';
    $datos= "";
    $query = "CALL MostrarVariables();";
    $sentencia = $conn -> prepare($query);
    $sentencia-> execute();
    $result = $sentencia ->get_result();
    while($resultA = $result -> fetch_assoc()){
        $datos = $datos ."<tr>
                            <td>
                                ". $resultA["idvariables"] ." 
                            </td>
                            <td>
                                ". $resultA["cNombreVariable"] ."  
                            </td>
                            <td>
                                ". $resultA["cValorVariable"] ."   
                            </td>
                            <td>
                                ". $resultA["cDescripcion"] ."     
                            </td> 
                            <td>
                                <a href='actualizarV.php?idvariable=" . $resultA["idvariables"] . "' class ='btn btn-success'>Actualizar</a>
                                <button  class ='btn btn-danger' onclick='EliminarVariable(" . $resultA["idvariables"] . ");'>Eliminar</button>
                            </td>    
                        </tr>";
    };
?>
<script>
    function EliminarVariable(idvariable){
            Swal.fire({
            title: '¿Desea eliminar el registro?',
            text: "Eliminar variable del sistema",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar!',
            cancelButtonText: 'Cancelar!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/admin/variables/eliminar.php?idvariable="+idvariable;
                
    
}
});
    }
    function ConfirmarEliminacion(){
        Swal.fire(
                'Eliminado!',
                'El registro fue eliminado.',
                'success'
        );
    }
</script>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-warning text-secondary">Mantenimiento de variables del sistema</h1>
    </div>   
</div>
<div class="row">
    <div class="col-md-3">
    </div>  
    <div class="col-md-6 ">
            <div class="row">
                <a href="nuevoV.php" class ="btn btn-primary">Nuevo</a>
            </div>
    </div>
    <div class="col-md-3">
    </div>
</div>



<table class = "table">
    <thead>
        <tr>
            <th>
                Código
            </th>
            <th>
                Nombre de la variable
            </th>
            <th>
                Valor de la variable
            </th>
            <th>
                Descripción
            </th>
            <th>
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo $datos; 
        ?>
    </tbody>
</table>
<?php
    /* 
    Petición
    GET --> http://localhost/admin/variables/ 
    Parametro -->Modelo vacio
    */
?>
<?php
    include '../footerA.php'
?>
