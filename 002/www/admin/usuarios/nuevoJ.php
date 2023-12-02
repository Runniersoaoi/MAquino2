

<div class="row">
        <div class="col-md-1">
        </div>  
        <div class="col-md-10 ">
            <form action="nuevoPost.php" method = "POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nombre del usuario</label><br>
                    <input id="cNombreUsuario" require class="form-control" name= "cNombreUsuario" type="text" placeholder="Ingrese el nombre del usuario"><br>
                </div> 
                <div class="form-group">
                    <label for="">Contraseña de usuario</label><br>
                    <input id="cContraseñaUsuario" require class="form-control" name= "cContraseñaUsuario" type="password" placeholder="Ingrese la contraseña del usuario"><br>
                </div> 
                <div class="form-group">
                    <label for="">Nombres Completos</label><br>
                    <input id="cNombres" require class="form-control" name= "cNombres" type="text" placeholder="Ingrese los nombres del usuario"><br>
                </div>  
                <div class="form-group">
                    <label for="">Apellidos</label><br>
                    <input id="cApellidos" require class="form-control" name= "cApellidos" type="text" placeholder="Ingrese los apellidos del usuario"><br>
                </div>  
                <hr>
                
            </form>
            <div class="form-group">
                    <button class="btn btn-success" onclick="GuardarUsuario();">Guardar</button> <br><br>  
                </div>
        </div>
        <div class="col-md-1">
        </div>
</div>

<?php
    
    /*GET -->localhost/admin/variables/nuevoV.php 
    Parametros --> Modelo Vacio
    */

?>
<script>
    function GuardarUsuario(){
        var cNombreUsuario = $("#cNombreUsuario").val();
        var cContraseñaUsuario = $("#cContraseñaUsuario").val();
        var cNombres = $("#cNombres").val();
        var cApellidos = $("#cApellidos").val();

        var formData = {
            "cNombreUsuario" : cNombreUsuario,
            "cContraseñaUsuario" : cContraseñaUsuario,
            "cNombres" : cNombres,
            "cApellidos" : cApellidos
        }

        $.post("/admin/usuarios/nuevoPostJ.php", formData,function(data){
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
</script>