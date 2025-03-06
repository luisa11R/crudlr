<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>este es el modulo de crear</h2>

    <Form action="" method="post">
        <label>Cedula</label><br>
        <input type="text" name="Cedula" required><br><br>
        <label>Nombre</label><br>
        <input type="text" name="Nombre" required><br><br>
        <label>Apellidos</label><br>
        <input type="text" name="Apellido" required><br><br>
        <label>Usuario</label><br>
        <input type="text" name="Usuario" required><br><br>
        <label>Clave</label><br>
        <input type="text" name="Clave" required><br><br>
        <input type="submit" name="enviar"  validar_vistaue="Registrar">
</Form>
</body>
</html>

<?php 
$controlador=new ControladorPersona();
if(isset($_POST['enviar'])){
   $res=$controlador->crear($_POST['Cedula'],$_POST['Nombre'],$_POST['Apellido'],$_POST['Usuario'],$_POST['Clave']);
}

if($res){
    echo "registro exitoso";
}
else{
    echo "fallo el registro";
}
?> 


