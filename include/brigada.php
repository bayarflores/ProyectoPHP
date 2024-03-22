<?php 
    require_once "conexion.php"; 
    
    session_start();

    if($_SESSION['rol'] == 1){ 
        
    $sql = "select*from brigada inner join agenda on brigada.agendaId = agenda.Id";
    $result = mysqli_query($conexion, $sql);

    
?>
 
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/styleVoluntario.css">
    <title>Brigada</title>
</head>
<body>
    <div class="parent__container">
        <div class="inner__parent"> 
            <?php  require_once "menu.php";   ?>
            <div class="parent">
                <form action="agregarBrigada.php" class="form__datos" method="post">
                    <h2>Brigada</h2>
                    <div class="date">
                        <div>
                            <img class="bc" src="../assets/img/3.jpeg" alt="" width=350 height=210>
                        </div>
                        <div class="container">
                            <label for="">Nº Brigada: 
                                <input class="nombre" type="text" name="numeroBrigada" required>
                            </label> 
                           
                            <label for="">Encargado: 
                                <input type="text" name="encargado" class="nombre" required pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios">
                            </label>
                            
                        </div>
                        
                        <div class="container">
                            <label for="">Tipo Brigada: 
                                <input  type="text" name="tipoBrigada" required pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios">
                            </label>
                          
                            <!-- <label for="">Nº Agenda: 
                                <input class="cedula" name="numeroAgenda" required pattern="[0-9]+" title="Solo se permiten numeros">
                            </label> -->
                            <label for="">Nº Agenda: 
                                <select class="cedula" name="numeroAgenda" id="">
                                    <option  selected disabled value="">--Seleccionar--</option>
                                    <?php 
                                        $q = "select*from agenda";
                                        $r = mysqli_query($conexion, $q);

                                        while($filas = mysqli_fetch_array($r)){
                                            echo "<option value = '" .$filas['id']. "'>" .$filas['numeroAgenda']."</option>"; 
                                        }
                                    ?>
                                </select>
                                 
                            </label> 
                        </div>

                        <div class="container"> 
                            <label for="">Nombre: 
                                <input type="text" name="nombre" required>
                            </label>
                            <label for="">Fecha: 
                                <input class="cedula" type="date" name="fecha" required>
                            </label>
                            
                        </div>
                      
                    </div>

                    <div class="container__btn">
                        <button class="btn" type="submit" name="nuevo">Nuevo</button>
                    </div>
                </form> 
            </div> 
        </div>

        
        <div class="table">
           <center> <h3>Brigada</h3></center>
                <table class="t__voluntario">
                   <thead>
                        <tr>
                            <th>Nº Brigada</th>       
                            <th>Nombre</th>
                            <th>Encargado</th> 
                            <th>Fecha</th>
                            <th>TipoBrigada</th> 
                            <th>Nº Agenda</th>
                            <th>Opciones</th>
                        </tr>
                   </thead>
                   <tbody>
                            <?php
                            
                               
                                while($filas = mysqli_fetch_array($result)){

                               
                            ?>    
                            <tr>

                                <td> <?=$filas['numeroBrigada'] ?> </td> 
                                <td> <?= $filas['nombreB'] ?> </td> 
                                <td> <?= $filas['encargado'] ?> </td> 
                                <td> <?= $filas['fecha'] ?> </td>  
                                <td> <?= $filas['tipoBrigadda'] ?> </td> 
                                <td> <?=$filas['numeroAgenda'] ?> </td> 
                                                        
                                <!-- /*Editar */ -->
                                <td class="opciones">
                                    <?="<a  class='update' href='updateBrigada.php? id=" .$filas['idBrigada']."'>EDITAR </a>";?>
                                    <?="<a  class='delete' href='eliminarBrigada.php? id=" .$filas['idBrigada']."'>ELIMINAR </a>";?>

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