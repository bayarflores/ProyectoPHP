<?php
    require_once "conexion.php";   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/styleVoluntario.css">
    <title>Editar Servicios</title>
</head>
<body>
<div class="parent__container">
        <div class="inner__parent">  
             
            <div class="parent">
                <form action="actualizarServicio.php" class="form__datos" method="post">
                    <h2>Editar Servicios</h2>


                    <?php  
                        if (isset($_GET['id'])){ 
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM servicio WHERE id=$id";
                        $result = mysqli_query($conexion,$sql);
                        $fila = mysqli_fetch_array($result);
                    ?>
                   

                    <div class="date">
                        <div>
                            <img class="bc" src="../assets/img/4.jpeg" alt="" width=350 height=210>
                        </div>
                        <div class="container">
                          
                            <label for="">Voluntario: 
                                <select class="nombre" name="voluntario" id="">
                                    <option value="" selected disabled >--Seleccionar--</option> 
                                    <?php
                                        $q1 = "select*from voluntario where idVoluntario=".$fila['voluntarioId'];
                                        $result1 = mysqli_query($conexion,$q1);
                                        $fila1 = mysqli_fetch_array($result1);
                                        echo "<option selected value = '" .$fila1['idVoluntario']. "'>" .$fila1['nombre']."</option>"; 
                                    
                                        $q2 = "select*from voluntario";
                                        $result2 = mysqli_query($conexion,$q2);

                                        while($filas = mysqli_fetch_array($result2)){
                                            echo "<option value = '" .$filas['idVoluntario']. "'>" .$filas['nombre']."</option>"; 
                                    
                                        }
                                    
                                    ?>
                                  
                                </select>
                                <!-- <input class="nombre" type="number" name="voluntario" required value="<?= $fila["voluntarioId"] ?>"> -->
                            </label>
                           
                             <label for="">Fecha:
                                <input class="telefono" type="date" name="fecha" required value="<?= $fila["fechaServicio"] ?>">
                            </label>
                           
                        </div>
                        
                        <div class="container">
                            <label for="">Brigada: 
                                <select class="cedula" name="brigada" id="">
                                    <option value="" selected disabled >--Seleccionar--</option> 
                                    <?php
                                        $q1 = "select*from brigada where idBrigada=".$fila['brigadaId'];
                                        $result1 = mysqli_query($conexion,$q1);
                                        $fila1 = mysqli_fetch_array($result1);
                                        echo "<option selected value = '" .$fila1['idBrigada']. "'>" .$fila1['nombreB']."</option>"; 
                                    
                                        $q2 = "select*from brigada";
                                        $result2 = mysqli_query($conexion,$q2);
                                        while($filas = mysqli_fetch_array($result2)){
                                            echo "<option value = '" .$filas['idBrigada']. "'>" .$filas['nombreB']."</option>"; 
                                    
                                        } 
                                    ?> 
                                </select>
                            </label> 
                            <!-- <label for="">Brigada: 
                                <input class="nombre" type="number" name="brigada" required value="<?= $fila["brigadaId"] ?>">
                            </label> -->

                            <label for="">Horas: 
                                <input class="cedula" type="number" name="hora" required value="<?= $fila["horas"] ?>" >
                            </label>
                           
                           
                           
                            
                        </div>
                        <div class="container"> 
                            <input type="hidden" value="<?php echo $id; ?>" name="id"> 
                        </div>
                    </div>

                    <div class="container__btn">
                        <button class="btn" type="submit" name="edit">Editar Servicio</button>
                        <!-- <button class="btn" type="submit" name="cancel">Cancelar</button> -->
                        <a href="servicio.php" class="btn_a">Cancelar</a> 
                    </div>
                   <?php
                    }else{
                        echo" <script language='JavaScript'>
                        alert('Registro no existe');
                        location.assign('servicio.php');
                        </script>";
                    }
                    ?>
                </form> 
            </div>
             
        </div>
</div>
</body>
</html>