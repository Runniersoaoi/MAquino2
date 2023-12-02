<?php
    include '../headerA.php'
?>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-info text-primary">Registro el nuevo usuario del sistema</h1>
    </div>   
</div>
<div class="row">
    <div class="col-md-3">
    </div>  
    <div class="col-md-6 ">
            <div class="row">
                <a href="index.php" class ="btn btn-primary">Regresar</a>
            </div>
            <div class="row">
                <button  class ="btn btn-primary" onclick="AlertJquery()">Probar</button>
            </div>  
    </div>
    <div class="col-md-3">
    </div>
</div>

<div class="row">
        <div class="col-md-3">
        </div>  
        <div class="col-md-4 ">
            <form action="nuevoPost.php" method = "POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nombre del usuario</label><br>
                    <input require class="form-control" name= "cNombreUsuario" type="text" placeholder="Ingrese el nombre del usuario"><br>
                </div> 
                <div class="form-group">
                    <label for="">Contraseña de usuario</label><br>
                    <input require class="form-control" name= "cContraseñaUsuario" type="password" placeholder="Ingrese la contraseña del usuario"><br>
                </div> 
                <div class="form-group">
                    <label for="">Nombres Completos</label><br>
                    <input require class="form-control" name= "cNombres" type="text" placeholder="Ingrese los nombres del usuario"><br>
                </div>  
                <div class="form-group">
                    <label for="">Apellidos</label><br>
                    <input require class="form-control" name= "cApellidos" type="text" placeholder="Ingrese los apellidos del usuario"><br>
                </div>  
                <div class="form-group">
                    <button class="btn btn-success">Guardar</button> <br><br>  
                </div>      
            </form>
        </div>
        <div class="col-md-4">
        </div>
</div>

<?php
    
    /*GET -->localhost/admin/variables/nuevoV.php 
    Parametros --> Modelo Vacio
    */

?>
<script>
    function AlertJquery(){
        var cNombreUsuario = $("#cNombreUsuario");
        console.log(cNombreUsuario.val());
        alert(cNombreUsuario.val());
    }
</script>
<?php
    include '../footerA.php'
?>