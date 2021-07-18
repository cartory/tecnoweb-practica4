<?php 
require_once "Negocio/NAmigo.php";
$NAmigo = new NAmigo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AGenda</title>
    <link rel="stylesheet" href="Presentacion/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <h3 class="text-primary">LISTADO AMIGOS</h3>
            <table class="mt-4 table">
                <thead>
                    <tr>
                        <th>CI</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $amigos = $NAmigo->mostrar();
                    foreach ($amigos as $key => $value) {
                    echo '
                        <tr>
                            <td>'.$value["ci"].'</td>
                            <td>'.$value["nombre"].'</td>
                            <td>'.$value["apellido"].'</td>
                            <td>'.$value["telefono"].'</td>
                            <td>'.$value["direccion"].'</td>
                            <td>'.$value["email"].'</td>
                        </tr>
                    ' ;
                    }
                    ?>
                </tbody>
            </table>
        </h3>
    </h3>
</div>
   
</body>
</html>