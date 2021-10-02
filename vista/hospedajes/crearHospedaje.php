<!doctype html>
<?php
include_once '../../modelo/Hospedaje.php';
include_once '../../modelo/conexion.php';
include_once '../../controlador/HospedajeController.php';
?>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>SantHeid</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Crear Hospedaje</h1>
                <?php
                    try{
                        if(!isset($_REQUEST["hos_id"])){
                            throw new Exception("Por favor ingrese el Id del cliente");
                        }

                        if(!isset($_REQUEST["hos_nombre"])){
                            throw new Exception("Por favor ingrese el Id del cliente");
                        }

                        $hos_id = $_REQUEST["hos_id"];
                        $hos_nombre = $_REQUEST["hos_nombre"];

                        $hospedaje = new Hospedaje;
                        $hospedaje->setHosId($hos_id);
                        $hospedaje->setHosNombre($hos_nombre);

                        $HospedajeController = new HospedajeController;

                        $resultado = $HospedajeController->crear($hospedaje);

                        if($resultado["type"] == "success"){
                            echo '<h2 class="text-center text-success" >' .$resultado["mensaje"].  '</h2>';
                        }else{
                            echo '<h2 class="text-center text-danger" >' .$resultado["mensaje"].  '</h2>';
                        }

                    }catch(Exception $ex){
                        echo $ex->getMessage();
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="/vista/hospedajes/listarHospedaje.php" class="btn btn-primary">Regresar al listado de hospedajes</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>