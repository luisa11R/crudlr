<?php
    $controlador = new controladorPersona();
    $resultado = $controlador->index();
    
?>


<body>

    
    <H1>Pagina de Inicio</h1>
    <table border="1">
        <tr>
        
            <th>ID</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Acciones</th>
            
        </tr>
        <tbody>

        <?php
            while($fila=mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>" .$fila["ID"] . "</td>";
                echo "<td>" .$fila["Cedula"] . "</td>";
                echo "<td>" .$fila["Nombre"] . "</td>";
                echo "<td>" .$fila["Apellido"] . "</td>";
                echo "<td>" .$fila["Usuario"] . "</td>";
                echo "<td>" .$fila["Clave"] . "</td>";
                echo "<td><a href='?cargar=ver&ID=".$fila["ID"]."'>ver</a> <a href='?cargar=editar&ID=".$fila["ID"]."'>editar</a> <a href='?cargar=eliminar&ID=".$fila["ID"]."'>eliminar</a></td>";

            }
        ?>
            <!-- <tr>
                <td>1</td>
                <td>31234532</td>
                <td>juan mi</td>
                <td>zatisavalidar_vista</td>
                <td>juanm</td>
                <td>juan123</td>
                    <a href="?cargar">ver</a>
                    <a href="#">editar</a>
                    <a href="#">eliminar</a>
                
            </tr>

            <tr>
                <td>2</td>
                <td>578939322</td>
                <td>jensen</td>
                <td>manguera</td>
                <td>mangue1</td>
                <td>90430</td>
            </tr>

            <tr>
                <td>3</td>
                <td>88888888888</td>
                <td>juan p</td>
                <td>montaño</td>
                <td>jpm</td>
                <td>jp123</td>
            </tr> -->
            
        </tbody>
    </table>


    <?php

    ?>
</body>
</html>