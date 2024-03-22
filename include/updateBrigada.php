<?php
    require_once "conexion.php";   
    // $sql = "select*from brigada inner join agenda on brigada.agendaId = agenda.Id";
    // $result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/styleVoluntario.css">
    <title>Editar Brigada</title>
</head>
<body>
<div class="parent__container">
        <div class="inner__parent"> 
    
            <div class="parent">
                <form action="actualizarBrigada.php" class="form__datos" method="post">
                    <h2>Editar Brigada</h2>


                    <?php  
                        if (isset($_GET['id'])){ 
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM brigada WHERE idBrigada=$id ";
                        $result = mysqli_query($conexion,$sql);
                        $fila = mysqli_fetch_array($result);
                    ?>
                   

                    <div class="date">
                        <div>
                            <img class="bc" src="../assets/img/3.jpeg" alt="" width=350 height=210>
                        </div>
                        <div class="container">
                          
                            <label for=""> Nº Brigada: 
                                <input type="text" name="numeroBrigada" required value="<?= $fila["numeroBrigada"] ?>">
                            </label>
                            <label for=""> Encargado:
                                <input type="text" name="encargado" required value="<?= $fila["encargado"] ?>">
                            </label> 
                        </div>
                        
                        <div class="container">
                            <label for=""> Tipo Brigada: 
                                <input type="text" name="tipoBrigada" required value="<?= $fila["tipoBrigadda"] ?>">
                            </label>  

                            <label for=""> Nº Agenda
                                <select class="cedula" name="numeroAgenda" id="">
                                    <option value="" selected disabled >--Seleccionar--</option> 
                                    <?php
                                        $q1 = "select*from agenda where id=".$fila['agendaId'];
                                        $result1 = mysqli_query($conexion,$q1);
                                        $fila1 = mysqli_fetch_array($result1);
                                        echo "<option selected value = '" .$fila1['id']. "'>" .$fila1['numeroAgenda']."</option>"; 
                                    
                                        $q2 = "select*from agenda";
                                        $result2 = mysqli_query($conexion,$q2);

                                        while($filas = mysqli_fetch_array($result2)){
                                            echo "<option value = '" .$filas['id']. "'>" .$filas['numeroAgenda']."</option>"; 
                                    
                                        } 
                                    ?> 
                                </select>
                            </label> 
                        </div>

                        <div class="container">
                             <label for=""> Nombre: 
                                <input type="text" name="nombre" required value="<?= $fila["nombreB"] ?>" >
                            </label>
                            <label for=""> Fecha: 
                                <input class="cedula" type="date" name="fecha" required value="<?= $fila["fecha"] ?>" >
                            </label> 
                        </div>

                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                       
                    </div>

                    <div class="container__btn">
                        <button class="btn" type="submit" name="edit">Editar Brigada</button> 
                        <a href="brigada.php" class="btn_a">Cancelar</a> 
                    </div>
                   <?php
                    }else{
                        echo" <script language='JavaScript'>
                        alert('Registro no existe');
                        location.assign('brigada.php');
                        </script>";
                    }
                    ?>
                </form> 
            </div>
            
        </div>
</div>
</body>
</html>

