<?php
    require_once "conexion.php";   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/styleVoluntario.css">
    <title>Editar Voluntarios</title>
</head>
<body>
<div class="parent__container">
        <div class="inner__parent">  
            <div class="parent">
                <form action="actualizarVoluntario.php" class="form__datos" method="post">
                    <h2>Editar Voluntarios</h2>


                    <?php  
                        if (isset($_GET['id'])){ 
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM voluntario WHERE idVoluntario=$id";
                        $result = mysqli_query($conexion,$sql);
                        $fila = mysqli_fetch_array($result);
                    ?>
                   

                    <div class="date">
                        <div>
                            <img class="bc" src="../assets/img/1.jpeg" alt="" width=350 height=210>
                        </div>
                        <div class="container">
                          
                            <label for="">Nombre: 
                                <input class="nombre" type="text" name="nombre" required value="<?= $fila["nombre"] ?>">
                            </label>
                            <label for="">Cedula: 
                                <input class="cedula" type="text" name="cedula" required value="<?= $fila["cedula"] ?>" >
                            </label>
                           
                            <label for="">Direccion: 
                                <input type="text" name="direccion" required value="<?= $fila["dirreccion"] ?>" >
                            </label>
                           
                        </div>
                        
                        <div class="container"> 
                            <!-- <label for="">Genero: 
                                <input class="telefono" type="text" name="genero" required value="<?= $fila["genero"] ?>">
                            </label>  -->
                            <label for="">Genero: 
                                <select class="telefono" name="genero" id="">
                                    <option><?= $fila["genero"] ?></option> 
                                    <option value="Femenino">F</option>
                                    <option value="Masculino">M</option> 
                                </select> 
                            </label>
                            <label for="">Telefono: 
                                <input class="telefono" type="text" name="telefono" maxlength="8" minlength="8"  required value="<?= $fila["telefono"] ?>">
                            </label>
                           
                            <label for="">Fecha Ingreso: 
                                <input class="fecha" type="date" name="fechaIngreso" required value="<?= $fila["fechaIngreso"] ?>">
                            </label>
                           
                            
                        </div>
                        <div class="container">
                            
                            <label for="">Correo: 
                                <input class="correo" type="email" name="correo" required value="<?= $fila["correo"] ?>">
                            </label>
                           
                            <label for="">Estado: 
                                <input class="estado" type="text" name="estado" required value="<?= $fila["estado"] ?>">
                            </label> 
                            
                            <input type="hidden" value="<?php echo $id; ?>" name="id">
                          
                        </div>
                    </div>

                    <div class="container__btn">
                        <button class="btn" type="submit" name="edit">Editar Voluntario</button>
                        <!-- <button class="btn" type="submit" name="cancel">Cancelar</button> -->
                        <a href="voluntario.php" class="btn_a">Cancelar</a> 
                    </div>
                   <?php
                    }else{
                        echo" <script language='JavaScript'>
                        alert('Registro no existe');
                        location.assign('voluntario.php');
                        </script>";
                    }
                    ?>
                </form> 
            </div>
            
        </div>
</div>
</body>
</html>


