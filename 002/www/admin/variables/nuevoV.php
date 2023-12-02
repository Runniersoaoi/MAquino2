<?php
    include '../headerA.php'
?>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-info text-primary">Registro de nueva variable del sistema</h1>
    </div>   
</div>
<div class="row">
    <div class="col-md-3">
    </div>  
    <div class="col-md-6 ">
            <div class="row">
                <a href="index.php" class ="btn btn-primary">Regresar</a>
            </div>
    </div>
    <div class="col-md-3">
    </div>
</div>

<div class="row">
        <div class="col-md-3">
        </div>  
        <div class="col-md-4 ">
            <form action="nuevoPost.php" method = "POST">
                <div class="form-group">
                    <label for="">Nombre de la variable</label><br>
                    <input require class="form-control" name= "cNombreVariable" type="text" placeholder="Ingrese el nombre de la variable"><br>
                </div> 
                <div class="form-group">
                    <label for="">Valor de la variable</label><br>
                    <input require class="form-control" name= "cValorVariable" type="text" placeholder="Ingrese el valor de la variable"><br>
                </div> 
                <div class="form-group">
                    <label for="">Descripcion de la variable</label><br>
                    <input require class="form-control" name= "cDescripcion" type="text" placeholder="Ingrese la descripcion de la variable"><br>
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
<?php
    include '../footerA.php'
?>