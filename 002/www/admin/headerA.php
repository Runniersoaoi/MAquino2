<?php
  $nombreEmpresa = "PROGRAMACION SCHOOL";  
  $añoAplicacion = 2023;
  $primerMensajeCar = "Primer mensaje de la aplicación";
  $segundoMensajeCar = "Segundo mensaje de la aplicación";
  $tercerMensajeCar = "Tercer mensaje de la aplicación";
  ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/css/estilosextra.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="/css/estilosextra2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Trabajo</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    </head>
    <body>
      <div id = "MiModal" class="modal fade" rol ="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 id = "MiModalHeaderT">Soy la cabecera</h1>
              </div>
              <div class="modal-body" id="MiModalBody">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste aspernatur veniam, repellendus placeat perferendis voluptate saepe reiciendis dolorum. Illo nihil vero dignissimos inventore ipsam accusantium cupiditate dolores adipisci reprehenderit beatae.</p>
              </div>
              <div class="modal-footer">
                <button class="btn btn-danger" onclick="CerrarModal()">Cerrar</button>
              </div>
            </div>
          </div>
      </div>
    <div class="row navPrincipal">
            <div class="col-md-2">
                <div class="container-img">
                  <a href="/">
                      <img src="/img/UCodeSpanishLogo.png" class="img-fluid" alt="" style = "margin-top: 30px;">
                  </a>
                </div>
            </div>
            <div class="col-md-3">
                <h1 class="text-center titulo"> Administración <?php echo $nombreEmpresa ?></h1>
            </div>
            <div class="col-md-7">
                <ul class="nav justify-content-end navAplicacion">
                    <li class="nav-item">
                      <a class="nav-link" href="/admin/variables/index.php">Variables</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/admin/servicios/index.php">Mant. Servicios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/admin/usuarios/index.php">Mant. Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a  href="/" style = "padding:100px">
                          <svg  style = "margin-top:30px" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-git-pull-request" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="6" cy="18" r="2" />
                            <circle cx="6" cy="6" r="2" />
                            <circle cx="18" cy="18" r="2" />
                            <line x1="6" y1="8" x2="6" y2="16" />
                            <path d="M11 6h5a2 2 0 0 1 2 2v8" />
                            <polyline points="14 9 11 6 14 3" />
                          </svg>
                        </a>
                    </li>
                  </ul>
            </div>
    </div>
