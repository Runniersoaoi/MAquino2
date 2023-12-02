<?php
    include '../headerA.php'
?>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-info text-primary">Registro el nuevo servicio del sistema</h1>
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
            <form action="nuevoPost.php" method = "POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nombre del servicio</label><br>
                    <input require class="form-control" name= "cNombreServicio" type="text" placeholder="Ingrese el nombre del servicio"><br>
                </div> 
                <div class="form-group">
                    <label for="">Descripcion del servicoi</label><br>
                    <input require class="form-control" name= "cDescripcion" type="text" placeholder="Ingrese la descripcion del servicio"><br>
                </div> 
                <div class="form-group">
                    <label for="">Precio del servicio</label><br>
                    <input require class="form-control" name= "nPrecioServicio" type="number" placeholder="Ingrese el precio del servicio"><br>
                </div>  
                <div class="form-group">
                    <label for="">Imagen</label><br>
                    <input require class="form-control" name= "image" type="file"><br>
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