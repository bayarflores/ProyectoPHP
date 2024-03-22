<?php
    require_once "conexion.php";   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/styleVoluntario.css">
    <title>Editar Agenda</title>
</head>
<body>
    
<div class="parent__container">
        <div class="inner__parent"> 
            <div class="parent">
                <form action="actualizarAgenda.php" class="form__datos" method="post">
                    <h2>Editar Agenda</h2>


                    <?php  
                        if (isset($_GET['id'])){ 
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM agenda WHERE id=$id";
                        $result = mysqli_query($conexion,$sql);
                        $fila = mysqli_fetch_array($result);
                    ?>
                   

                    <div class="date">
                        <div>
                            <img class="bc" src="../assets/img/2.jpeg" alt="" width=350 height=210>
                        </div>
                        <div class="container">
                          
                            <label for="">Nº Agenda: 
                                <input type="text" name="numeroAgenda" required value="<?= $fila["numeroAgenda"] ?>">
                            </label>
                            <label for="">Solicitante: 
                                <input type="text" name="solicitante" required value="<?= $fila["solicitante"] ?>" >
                            </label>
                         
                           
                        </div>
                        
                        <div class="container">
                              <label for="">Lugar:
                                <input type="text" name="lugar" required value="<?= $fila["lugar"] ?>">
                           </label>
                          
                          
                            <label for="">Estado: 
                                <input type="text" name="estado" required value="<?= $fila["estado"] ?>">
                            </label>  
                        </div>
                        <div class="container">
                            <label for="">Fecha Solicitud: 
                                <input type="date" name="fechaSolicitud" required value="<?= $fila["fechaSolicitud"] ?>" >
                            </label>
                            <label for=""></label>
                            <label for=""></label>
                        </div>
                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                       
                    </div>

                    <div class="container__btn">
                        <button class="btn" type="submit" name="edit">Editar Agenda</button> 
                        <a href="agenda.php" class="btn_a">Cancelar</a> 
                    </div>
                   <?php
                    }else{
                        echo" <script language='JavaScript'>
                        alert('Registro no existe');
                        location.assign('agenda.php');
                        </script>";
                    }
                    ?>
                </form> 
            </div> 
        </div>
</div>
</body>
</html>

