<?php
    include '../headerA.php';
?>
<?php
    include '../codigBD.php';
    $datos= "";
    $query = "CALL MostrarUsuarios();";
    $sentencia = $conn -> prepare($query);
    $sentencia-> execute();
    $result = $sentencia ->get_result();
    while($resultA = $result -> fetch_assoc()){
        $datos = $datos ."<tr>
                            <td>
                                ". $resultA["idusuario"] ." 
                            </td>
                            <td>
                                ". $resultA["cNombreUsuario"] ."  
                            </td>
                            <td>
                                ". $resultA["cNombres"] ."   
                            </td> 
                            <td>
                                ". $resultA["cApellidos"] ."   
                            </td> 
                            <td>
                                <button  class ='btn btn-success' onclick='AbrirFormularioEditar(" . $resultA["idusuario"] . ");'>Actualizar</button>
                                <button  class ='btn btn-danger' onclick='EliminarUsuario(" . $resultA["idusuario"] . ");'>Eliminar</button>
                            </td>       
                        </tr>";
    };
?>
<script>
    function EliminarUsuario(idusuario){
            Swal.fire({
            title: '¿Desea eliminar el usuario?',
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
    function EliminarServicio(idservicio){
            Swal.fire({
            title: '¿Desea eliminar el registro?',
            text: "Eliminar servicio del sistema",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar!',
            cancelButtonText: 'Cancelar!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/admin/servicios/eliminar.php?idservicio="+idservicio;
                
    
}
});
    }
</script>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-warning text-secondary">Mantenimiento de usuarios</h1>
    </div>   
</div>
<div class="row">
    <div class="col-md-3">
    </div>  
    <div class="col-md-6 ">
            <div class="row">
                <button onclick ="AbrirFormularioNuevo();" class ="btn btn-success">Nuevo</button>
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
                Nombre del usuario
            </th>
            <th>
                Nombres
            </th>
            <th>
                Apellidos
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
<script>
    function AbrirModal(){
        $("#MiModal").modal("show");
    }
    function CerrarModal(){
        $("#MiModal").modal("hide");
    }
    function AbrirFormularioNuevo(){
        $.get("/admin/usuarios/nuevoJ.php",function(data){
            $("#MiModalHeaderT").html("Registros de nuevos usuarios del sistema");
            $("#MiModalBody").html(data);
            $("#MiModal").modal("show");
        });
    }
    function AbrirFormularioEditar(idusuario){
        $.get("/admin/usuarios/actualizarJ.php?idusuario="+ idusuario,function(data){
            $("#MiModalHeaderT").html("Actualizar Usuario del sistema");
            $("#MiModalBody").html(data);
            $("#MiModal").modal("show");
        });
    }
    function EliminarUsuario(idusuario){
        Swal.fire({
            title: 'Eliminar Usuario?',
            text: "¿Esta seguro de realizar la eliminacion?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.get("/admin/usuarios/eliminarJ.php?idusuario="+ idusuario,function(data){
                    Swal.fire(
                        'Proceso Correcto',
                        data,
                        'success'
                        );
                         setTimeout(() => {
                        window.location.reload();
                        }, 2000);
                });
            }
            });
    }
</script>
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
