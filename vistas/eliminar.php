<?php
    $controlador = new ControladorPersona();

    if (isset($_GET["ID"])){
        $registro= $controlador-> ver($_GET["ID"]);
    } else {
        header("Location:index.php");
    }

    if (isset($_POST["eliminar"])){
        $controlador-> eliminar($_GET["ID"]);
        header("Location:index.php");
    }
        
    
?>

<form action=""method="post">
    <table>
        <tr>
            <th>ID</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Clave</th>
        </tr>
    </table>
    <tbody>
        <tr>
            <td><?php echo $registro["Cedula"] ?></td>
            <td><?php echo $registro["Nombre"] ?></td>
            <td><?php echo $registro["Apellido"] ?></td>
            <td><?php echo $registro["Usuario"] ?></td>
            <td><?php echo $registro["Clave"] ?></td>
            <td><input type="submit" name="eliminar" validar_vistaue="Eliminar"></td>
        </tr>
    </tbody>
</form>