<?php
  include 'header.php';
?>

<?php
  $mysqli = new mysqli("localhost:3306", "root", "c0nqu1stad0r26", "programacion_school");
  $query = "SELECT
            *
            FROM variables A";
  $resultado = $mysqli -> query($query);
  $resultado-> data_seek(0);

  while($resultadoA = $resultado ->fetch_assoc()){
    if($resultadoA["cNombreVariable"]=="cNombreEmpresa"){
      $nombreEmpresa = $resultadoA["cValorVariable"];
    }
    else if($resultadoA["cNombreVariable"]=="cAñoAplicacion"){
      $añoaplicacion = $resultadoA["cValorVariable"];
    }
    else if($resultadoA["cNombreVariable"]=="cTituloBan1"){
      $primerMensajeCar = $resultadoA["cValorVariable"];
    }
    else if($resultadoA["cNombreVariable"]=="cTituloBan2"){
      $segundoMensajeCar = $resultadoA["cValorVariable"];
    }
    else if($resultadoA["cNombreVariable"]=="cTituloBan3"){
      $tercerMensajeCar = $resultadoA["cValorVariable"];
    }
    else{

    }
  }
?>

    <div class="row secPrincipal">
        <div class="col-md-8">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img" src="/img/1.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="text-light">First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="img" src="/img/Lenguajes-de-programacion-del-futuro-programacion-lenguajes-de-programacion-python-JS-C-Java-1024x683.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-light">Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="img" src="/img/que-es-pseudocodigo-1024x512.png" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="text-light">Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="col-md-4">
            <br>
            <div class="row">
                <div class="col-sm-12 mb-3 mb-sm-0" style="margin-bottom: 10px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold;">Special title treatmen</h5>
                            <p class="card-text">Withe seirneeqnfue</p>
                            <a href="/servicios.html" class="btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-12 mb-3 mb-sm-0" style="margin-bottom: 10px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold;">Special title treatmen</h5>
                            <p class="card-text">Withe seirneeqnfue</p>
                            <a href="/contactenos.html" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
  include 'footer.php';
?> 
