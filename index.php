<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>SantHeid</title>
</head>
<?php

if (isset($body) && $body == true) {
    echo '<body style="background-color:white">';
} else {
    echo '<body style="background-color:black">';
}

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center pt-5">
                <h1 class="text-success">
                    HOTEL SANTHEID TE DA LOS MEJORES SUEÑOS
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <a href="../vista/hospedajes/listarHospedaje.php" class="btn btn-primary">Hospesaje nivel 1-3</a>
            </div>
            <div class="col text-center">
                <a href="../vista/hospedajes/listarHospedaje.php" class="btn btn-primary">Hospedaje nivel 4-6</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>