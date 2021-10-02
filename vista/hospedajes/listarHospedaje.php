<!doctype html>
<?php
include_once '../../controlador/HospedajeController.php';
include_once '../../modelo/conexion.php';
include_once '../../modelo/Hospedaje.php';
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
                    Lista de Hospedajes
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="formularioCrearHospedaje.php" class="btn btn-primary">Crear un nuevo Hospedaje</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-10 ofsset-md-1">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Nombre</td>
                            <td>Numero de Habitacion</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $HospedajeController = new HospedajeController;
                            $hospedajes = $HospedajeController->listar();
                            foreach ($hospedajes as $hospedaje){
                        ?>
                        <tr>
                            <td>
                                <?php echo $hospedaje->getHosId() ?>
                            </td>
                            <td>
                                <?php echo $hospedaje->getHosNombre() ?>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="formularioEditarHospedaje.php?hos_id=<?php echo $hospedaje->getHosId()  ?>" class="btn btn-primary">Editar</a>
                                    </div>
                                    <div class="col">
                                    <a href="formularioEliminarHospedaje.php?hos_id=<?php echo $hospedaje->getHosId()  ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>