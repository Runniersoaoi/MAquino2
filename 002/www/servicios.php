<?php
    include 'header.php'
?>
<?php
    $datosHTML = "";
    include 'admin/codigBD.php';
    $datos= "";
    $query = "CALL MostrarServicios();";
    $sentencia = $conn -> prepare($query);
    $sentencia-> execute();
    $result = $sentencia ->get_result();
?>
<?php
    while($resultA = $result ->fetch_assoc()){
        $cNombreServicio = $resultA["cNombreServicio"];
        $cDescripcion = $resultA["cDescripcion"];
        $nPrecioServicio = $resultA["nPrecioServicio"];
        $cRutaImagen = $resultA["cRutaImagenServicio"];  
        $datosHTML = $datosHTML . "<div class='col-md-4 " . retornarColor() ." ' >
        <div class='row' style='padding:20px;'>
            <div class='col-md-12 imgCon'>
                <img src='" . $cRutaImagen . "' alt='Productos y Servicios' class='img-fluid img-fluidPri img-fluidPriH'>
            </div>
            <h2 class= 'TituloServicio text-center' > " . $cNombreServicio . "Nombre del servicio</h2>
            <hr>
            <h3 class= 'DescripcionServicio' >" . $cNombreServicio . "</h3>
            <hr>
            <h3 class= 'PrecioServicio' > S/" . $nPrecioServicio . "</h3>
        </div> 
    </div>";
        };
?>
<?php
    function retornarColor(){
        $numeroBG = rand(1,6);
        $colorFondo = "";
        if($numeroBG == 1){
            return $colorFondo = "bg-warning";
        }
        if($numeroBG == 2){
            return $colorFondo = "bg-danger";
        }
        if($numeroBG == 3){
            return $colorFondo = "bg-primary";
        }
        if($numeroBG == 4){
            return $colorFondo = "bg-warning";
        }
        if($numeroBG == 5){
            return $colorFondo = "bg-danger";
        }
        if($numeroBG == 6){
            return $colorFondo = "bg-primary";
        }
    }

?>
<div class="row">
    <h1 class="bg-dark text-center text-secondary" style="padding:15px; margin-bottom : 0px;">PRODUCTOS Y SERVICIOS</h1>

    <?php echo $datosHTML  ?>    
</div>
<?php
    include 'footer.php'
?>