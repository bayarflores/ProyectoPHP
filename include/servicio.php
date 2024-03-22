<?php 

    require_once "conexion.php";  
    session_start();

    if($_SESSION['rol'] == 1){ 

    $sql = "select*from servicio 
            inner join voluntario on servicio.voluntarioId = voluntario.idVoluntario
            inner join brigada on servicio.brigadaId = brigada.idBrigada";
    $result = mysqli_query($conexion, $sql);

    
?>
 
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/styleVoluntario.css">
    <title>Registro de Servicios</title>
</head>
<body>
    <div class="parent__container">
        <div class="inner__parent"> 
            <?php  require_once "menu.php";   ?>
            <div class="parent">
                <form action="agregarServicio.php" class="form__datos" method="post">
                    <h2>Registro de Servicios</h2>
                    <div class="date">
                        <div>
                            <img class="bc" src="../assets/img/4.jpeg" alt="" width=350 height=210>
                        </div>
                        <div class="container">
                            <!-- <label for="">VoluntarioId: 
                                <input class="nombre" type="text" name="voluntario" required  >
                            </label> -->

                            <label for="">Voluntario: 
                                <select class="cedula" name="voluntario" id="">
                                    <option  selected disabled value="">--Seleccionar--</option>
                                    <?php 
                                        $q = "select* from voluntario;";
                                        $r = mysqli_query($conexion, $q);

                                        while($filas = mysqli_fetch_array($r)){
                                            echo "<option value = '" .$filas['idVoluntario']. "'>" .$filas['nombre']."</option>"; 
                                          
                                        }
                                    ?>
                                </select> 
                            </label>
                            
                             <label for="">Fecha: 
                                 <input class="telefono" type="date" name="fecha" required>
                             </label>
                            
                            
                        </div>
                        
                        <div class="container">
                            <label for="">Brigada: 
                                <select class="cedula" name="brigada" id="">
                                    <option  selected disabled value="">--Seleccionar--</option>
                                    <?php 
                                        $q = "select*from brigada";
                                        $r = mysqli_query($conexion, $q);

                                        while($filas = mysqli_fetch_array($r)){
                                            echo "<option value = '" .$filas['idBrigada']. "'>" .$filas['numeroBrigada']."</option>"; 
                                        }
                                    ?>
                                </select> 
                            </label>
                            <!-- <label for="">BrigadaId: 
                                <input  class="nombre"  type="text" name="brigada" required>
                            </label> -->
                            <label for="">Horas: 
                                <input class="cedula"  type="text" name="hora" required pattern="[0-9]+" title="Solo se permiten numeros">
                            </label> 
                           
                            
                        </div>
                        <div class="container">
                        </div>
                    </div>

                    <div class="container__btn">
                        <button class="btn" type="submit" name="nuevo">Nuevo</button>
                        <!-- <button class="btn">Delete</button>
                        <button class="btn">Update</button>  -->
                    </div>
                </form> 
            </div> 
        </div>

        
        <div class="table">
           <center> <h3>Servicios</h3></center>
                <table class="t__voluntario">
                   <thead>
                        <tr>
                            <th>Voluntario</th>       
                            <th>Brigada</th>
                            <th>Horas</th> 
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                   </thead>
                   <tbody>
                            <?php
                                while($filas = mysqli_fetch_assoc($result)){

                               
                            ?>    
                            <tr>

                                <td> <?=$filas['nombre'] ?> </td> 
                                <td> <?= $filas['nombreB'] ?> </td> 
                                <td> <?= $filas['horas'] ?> </td>  
                                <td> <?= $filas['fechaServicio'] ?> </td> 
                                                        
                                <!-- /*Editar */ -->
                                <td class="opciones">
                                    <?="<a  class='update' href='updateServicio.php? id=" .$filas['id']."'>EDITAR </a>";?>
                                    <?="<a  class='delete' href='eliminarServicio.php? id=" .$filas['id']."'>ELIMINAR </a>";?>

                                </td> 
                            </tr>                      
                            
                            
                            <?php
                                }
                            ?>
                   </tbody>
                </table> 
        </div>
        <?php  require_once "footer.php";   ?>

    </div>
     
    <?php mysqli_close($conexion); ?>

    </body>
</html>

<?php
}else{
    header('Location: inicio.php');
}
?>

 