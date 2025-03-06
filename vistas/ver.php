<?php

    $controlador = new ControladorPersona();

    if(isset($_GET["ID"])){
        $registro = $controlador -> ver($_GET["ID"]);
    } else {
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver</title>
</head>
<body>
    <main class="main__container">
        <div class="table__section">
            <table class="table">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                </thead>
                <tbody>
                    <?php
                    
                        echo "<td>" . $registro["ID"] . "</td>";
                        echo "<td>" . $registro["Cedula"] . "</td>";
                        echo "<td>" . $registro["Nombre"] . "</td>";
                        echo "<td>" . $registro["Apellido"] . "</td>";
                        echo "<td>" . $registro["Usuario"] . "</td>";
                        echo "<td>" . $registro["Clave"] . "</td>";
                    
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>