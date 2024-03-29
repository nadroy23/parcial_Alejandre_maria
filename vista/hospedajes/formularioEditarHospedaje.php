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
                    Editar Hospedajes
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
                $resultado = $HospedajeController->buscar($hos_id);

                if(count($resultado) > 0) {
                    $hospedaje = $resultado[0];
                }
            }catch(Exception $e){
                echo $e->getMessage();
            }
        ?>
        <div class="row">
            <div class="col-md-4">
                <a href="/vista/hospedajes/listarHospedaje.php" class="btn btn-primary">Regresar al listado de hospedaje</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-10 ofsset-md-1">
                <form action="actualizarHospedaje.php" method="post">
                    <div class="form-group">
                        <label for="hos_id">ID</label>
                        <input type="number" class="form-control" id="hos_id" name="hos_id" value="<?php echo $hospedaje->getHosId(); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="hos_nombre">Nombre</label>
                        <input type="text" class="form-control" id="hos_nombre" name="hos_nombre" value="<?php echo $hospedaje->getHosNombre() ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>