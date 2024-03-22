<?php 
    require_once "conexion.php";  

    $sql = "select*from agenda";
    $result = mysqli_query($conexion, $sql);

    
?>
 
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/styleVoluntario.css">
    <title>Agenda</title>
</head>
<body>
    <div class="parent__container">
        <div class="inner__parent"> 
            <?php  require_once "menu.php";   ?>
            <div class="parent">
                <form action="agregarAgenda.php" class="form__datos" method="post">
                    <h2>Agenda</h2>
                    <div class="date">
                        <div>
                            <img class="bc" src="../assets/img/2.jpeg" alt="" width=350 height=210>
                        </div>
                        <div class="container">
                            <label for="">Nº agenda: 
                                <input class="nombre" type="text" name="numeroAgenda" required>
                            </label> 
                           
                            <label for="">Solicitante: 
                                <input type="text" name="solicitante" required pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios">
                            </label>
                            
                        </div>
                        
                        <div class="container">
                            <label for="">Lugar: 
                                <input type="text" name="lugar" required>
                            </label>
                            <label for="">Estado: 
                                <input  type="text" name="estado" required pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios">
                            </label>
                        </div>
                        <div class="container"> 
                            <label for="">Fecha Solicitud: 
                                <input class="fecha" type="date" name="fechaSolicitud" required>
                            </label>
                            <label for=""></label>
                            <label for=""></label>
                        </div>
                      
                    </div>

                    <div class="container__btn">
                        <button class="btn" type="submit" name="nuevo">Nuevo</button>
                    </div>
                </form>

                 


            </div>


           
        </div>

        
        <div class="table">
           <center> <h3>Agenda</h3></center>
                <table class="t__voluntario">
                   <thead>
                        <tr>
                            <th>Nº Agenda</th>       
                            <th>Solicitante</th>
                            <th>Lugar</th> 
                            <th>FechaSolicitud</th>
                            <th>Estado</th> 
                            <th>Opciones</th>
                        </tr>
                   </thead>
                   <tbody>
                            <?php
                                while($filas = mysqli_fetch_assoc($result)){

                               
                            ?>    
                            <tr>

                                <td> <?=$filas['numeroAgenda'] ?> </td> 
                                <td> <?= $filas['solicitante'] ?> </td> 
                                <td> <?= $filas['lugar'] ?> </td> 
                                <td> <?= $filas['fechaSolicitud'] ?> </td>  
                                <td> <?= $filas['estado'] ?> </td> 
                                                        
                                <!-- /*Editar */ -->
                                <td class="opciones">
                                    <?="<a  class='update' href='updateAgenda.php? id=" .$filas['id']."'>EDITAR </a>";?>
                                    <?="<a  class='delete' href='eliminarAgenda.php? id=" .$filas['id']."'>ELIMINAR </a>";?>

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

 