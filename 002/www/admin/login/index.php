<?php
    if (isset($_SESSION["NombreUsuario"])){
        echo $_SESSION["NombreUsuario"];
    }
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
    <title>Ingreso al sistema</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="background-color: cyan; height: 100vh;">
            <div class="col-md-3">

            </div>
            <div class="col-md-6" style="padding: 170px;">
                <div class="row">
                    <h1 class="text-info text-center" style="background-color: rgb(164, 242, 81);">Ingreso al sistema de administración</h1>
                    <form action="ValidarCredenciales.php" method="POST">

                        <h1 class="text-center text-danger">
                            <?php
                            if(isset($_GET["mensajeLogin"])){
                                echo $_GET["mensajeLogin"];
                                }
                            ?>
                        </h1>
                        <div class="form-group">
                            <label style="font-weight: bold;" for="">Usuario</label>
                            <input name="cNombreUsuario" class = "form-control" type="text" placeholder="Ingrese su usuario" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: bold;" for="">Contraseña</label>
                            <input name="cContraseñaUsuario" class = "form-control" type="password" placeholder="Ingrese su usuario" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <button class="btn btn-primary" type = "submit">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
</body>
</html>