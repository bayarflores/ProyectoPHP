


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>
<body>
    <? php 
    
    $query = "SELECT rol FROM usuario INNER JOIN rol ON usuario.rolId = rol.rolId";
    $resultado = mysqli_query($conexion, $query);
    ?>
    <form action="" method="POST">
        <h2>Hola</h2>
        <p>Inicia tu registro</p>

        <div class="input-wrapper">
            <input type="text" name="userName" placeholder="Nombre usuario">

        </div>
        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre">

        </div>
        <div class="input-wrapper">
            <input type="password" name="contraseña" placeholder="Contraseña">

        </div>
        <div class="input-wrapper">
            <input type="text" name="correo" placeholder="Correo">

        </div>
        <div class="input-wrapper">
            <?php

                // $query = "SELECT rol FROM usuario INNER JOIN rol ON usuario.rolId = rol.rolId";
                // $resultado = mysqli_query($conexion, $query);

                while($fila = mysqli_fetch_assoc($resultado)) {
                    $valor = $fila['rol'];
                    echo "<option value='$valor'>$valor</option>";
                }

            ?>
            // <!-- <input type="text" name="rol" placeholder="Rol"> -->

        </div>
 


        // <input class="btn" type="submit" name="register" value="Registrar">

    </form>
</body>
</html>

