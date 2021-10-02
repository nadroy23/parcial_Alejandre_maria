<!doctype html>
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
                    Listado de Hospedaje
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="/vista/hospedajes/listarHospedaje.php" class="btn btn-primary">Regresar al listado de hospedajes</a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-10 ofsset-md-1">
                <form action="crearHospedaje.php" method="post">
                    <div class="form-group">
                        <label for="hos_id">ID</label>
                        <input type="number" class="form-control" id="hos_id" name="hos_id">
                    </div>
                    <div class="form-group">
                        <label for="hos_nombre">Nombre</label>
                        <input type="text" class="form-control" id="hos_nombre" name="hos_nombre">
                    </div>
                    <div class="form-group">
                        <label for="hos_numero_de_habitacion">Numero de habitacion</label>
                        <input type="text" class="form-control" id="hos_numero_de_habitacion" name="hos_numero_de_habitacion">
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Hospedaje</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>