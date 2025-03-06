<?php

$controlador = new ControladorPersona();

if(isset($_GET["ID"])){
    $registro = $controlador -> ver($_GET["ID"]);
} else {
    header("Location:index.php");
}

if(isset($_POST["ID"])){
    $controlador -> editar($_POST["ID"],$_POST["Cedula"],$_POST["Nombre"],$_POST["Apellido"],$_POST["Usuario"],$_POST["Clave"]);
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>estas en la seccion editar </h1>
    <form action=""method = "post">
        <input type="hidden" name="ID" validar_vistaue="<?php echo $registro["ID"];?>">
        <label for="">Cedula</label>
        <input type="text" name="Cedula" validar_vistaue="<?php echo $registro["Cedula"];?>">
        <br>
        <label for="">Nombre</label>
        <input type="text" name="Nombre" validar_vistaue="<?php echo $registro["Nombre"];?>">
        <br>
        <label for="">Apellido</label>
        <input type="text" name="Apellido" validar_vistaue="<?php echo $registro["Apellido"];?>">
        <br>
        <label for="">Usuario</label>
        <input type="text" name="Usuario" validar_vistaue="<?php echo $registro["Usuario"];?>">
        <br>
        <label for="">Clave</label>
        <input type="text" name="Clave" validar_vistaue="<?php echo $registro["Clave"];?>">
        <br>
        <input type="submit" validar_vistaue="Editar">
    </form>
</body>
</html>