<?php
    include '../headerA.php'
?>
<?php
    $idvariable = $_GET["idvariable"];
    include '../codigBD.php';
    $query = "CALL MostrarVariable(?);";
    $sentencia = $conn -> prepare($query);
    $sentencia ->bind_param("i",$idvariable);
    $sentencia-> execute();
    $result = $sentencia ->get_result();

    $cNombreVariable = "";
    $cValorVariable = "";
    $cDescripcion = "";

    while($resultA = $result -> fetch_assoc()){
        $cNombreVariable = $resultA["cNombreVariable"];
        $cValorVariable = $resultA["cValorVariable"];
        $cDescripcion = $resultA["cDescripcion"];     
    }
?>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-info text-primary">Actualizacion de variables del sistema</h1>
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
            <form action="actualizarPost.php" method = "POST">

                <input type="hidden" name="idvariable" value = <?php echo $idvariable ?>>
                <div class="form-group">
                    <label for="">Nombre de la variable</label><br>
                    <input require class="form-control" name= "cNombreVariable" 
                    type="text" placeholder="Ingrese el nombre de la variable" value="<?php echo $cNombreVariable ?>" disabled><br>
                </div> 
                <div class="form-group">
                    <label for="">Valor de la variable</label><br>
                    <input require class="form-control" name= "cValorVariable" 
                    type="text" placeholder="Ingrese el nombre de la variable" value="<?php echo $cValorVariable ?>"><br>
                </div> 
                <div class="form-group">
                    <label for="">Descripcion de la variable</label><br>
                    <input require class="form-control" name= "cDescripcion" 
                    type="text" placeholder="Ingrese el nombre de la variable" value="<?php echo $cDescripcion ?>"><br>
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
    
    /*GET -->localhost/admin/variables/actualizarV.php 
    Parametros --> Modelo Vacio
    */

?>
<?php
    include '../footerA.php'
?>