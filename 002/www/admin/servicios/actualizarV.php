<?php
    include '../headerA.php'
?>
<?php
    $idservicio = $_GET["idservicio"];
    include '../codigBD.php';
    $datos = "";
    $query = "CALL MostrarServicio(?);";
    $sentencia = $conn -> prepare($query);
    $sentencia ->bind_param("i",$idservicio);
    $sentencia-> execute();
    $result = $sentencia ->get_result();

    $cNombreServicio = "";
    $cDescripcion = "";
    $nPrecioServicio = 0;
    $cRutaImagenServicio = "";

    while($resultA = $result -> fetch_assoc()){
        $cNombreServicio = $resultA["cNombreServicio"];
        $cDescripcion = $resultA["cDescripcion"];
        $nPrecioServicio = $resultA["nPrecioServicio"]; 
        $cRutaImagenServicio = $resultA["cRutaImagenServicio"];     
    }
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
            <form action="actualizarPost.php" method = "POST" enctype="multipart/form-data">
                <input type="hidden" value = <?php echo $idservicio ?> name = "idservicio">
                <div class="form-group">
                    <label for="">Nombre del servicio</label><br>
                    <input require class="form-control" name= "cNombreServicio" type="text" 
                    value = <?php echo $cNombreServicio ?> placeholder="Ingrese el nombre del servicio"><br>
                </div> 
                <div class="form-group">
                    <label for="">Descripcion del servicoi</label><br>
                    <input require class="form-control" name= "cDescripcion" type="text" 
                    value = <?php echo $cDescripcion ?> placeholder="Ingrese la descripcion del servicio"><br>
                </div> 
                <div class="form-group">
                    <label for="">Precio del servicio</label><br>
                    <input require class="form-control" name= "nPrecioServicio" type="number" 
                    value = <?php echo $nPrecioServicio ?> placeholder="Ingrese el precio del servicio"><br>
                </div>  
                <div class="form-group">
                    <label for="">Imagen</label><br>
                    <input require class="form-control" name= "image" type="file"><br>
                </div>  
                <hr>
                <div class="form-group">
                    <img class="img-fluid" src="<?php echo $cRutaImagenServicio ?>" alt="Imagen para actualizar">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Actualizar</button> <br><br>  
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