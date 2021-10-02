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
            <div class="col text-center pt-5">
                <h1 class="text-success">
                    Eliminar Hospedaje
                </h1>
            </div>
        </div>
        <?php
            if(!isset($_GET["hos_id"])){
                throw new Exception("No se recibio la ID del cliente");
            }
            try {
                $hos_id = $_GET["hos_id"];
                $HospedajeController = new HospedajeController;
                $resultado = $DHospedajeController->buscar($hos_id);

                if(count($resultado) > 0) {
                    $hospedaje = $resultado[0];
                }
            }catch(Exception $e){
                echo $e->getMessage();
            }
        ?>
        
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-title">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-center text-primary">
                                    <?php echo $hospedaje->getHosId() . " - " . $hospedaje->getHosNombre();  ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="eliminarHospedaje.php">
                            <input type="hidden" name="hos_id" value="<?php echo $hospedaje->gethosId() ?>">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </div>
                                <div class="col text-center">
                                    <a href="/vista/hospedajes/listarHospedaje.php" class="btn btn-success">Regresar al listado de hospedaje</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>