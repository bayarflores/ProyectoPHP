 <?php 
    require_once "conexion.php";  

    $sql = "select*from voluntario";
    $result = mysqli_query($conexion, $sql);

    
?>
 
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/styleVoluntario.css">
    <title>Registro de Voluntarios</title>
</head>
<body>
    <div class="parent__container">
        <div class="inner__parent"> 
            <?php  require_once "menu.php";   ?>
            <div class="parent">
                <form action="agregarVoluntario.php" class="form__datos" method="post">
                    <h2>Registro de Voluntarios</h2>
                    <div class="date">
                        <div>
                            <img class="bc" src="../assets/img/1.jpeg" alt="" width=350 height=210>
                        </div>
                        <div class="container">
                            <label for="">Nombre: 
                                <input class="nombre" type="text" name="nombre" required pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios" >
                            </label>
                            <label for="">Cedula: 
                                <input class="cedula" type="text" name="cedula" required maxlength="16">
                            </label>
                           
                            <label for="">Direccion: 
                                <input type="text" name="direccion" required>
                            </label>
                           
                        </div>
                        
                        <div class="container">
                            <!-- <label for="">Genero: 
                                <input class="telefono" type="text" name="genero" required maxlength="1" pattern="[A-Za-z\s]+" title="Solo se permiten letras">
                            </label>  -->

                            <label for="">Genero: 
                                <select class="telefono" name="genero" id="">
                                    <option  selected disabled value="">--Seleccionar--</option>
                                    <option value="Femenino">F</option>
                                    <option value="Masculino">M</option> 
                                </select> 
                            </label>
                           
                            <label for="">Telefono: 
                                <input class="telefono" type="text" name="telefono" required minlength="8" maxlength="8" pattern="[0-9]+" title="Solo se permiten números">
                            </label>
                           
                            <label for="">Fecha Ingreso: 
                                <input class="fecha" type="date" name="fechaIngreso" required>
                            </label>
                           
                            
                        </div>
                        <div class="container">
                          
                            <label for="">Correo: 
                                <input class="correo" type="email" name="correo" required>
                            </label>
                           
                            <label for="">Estado: 
                                <input class="estado" type="text" name="estado" required>
                            </label>
                            <label for=""></label>
                              
                          <!-- <label for="">Apellido: 
                                <input class="apellido" type="text" name="apellido" required pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios">
                            </label> -->
                          
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
           <center> <h3>Voluntarios</h3></center>
                <table class="t__voluntario">
                   <thead>
                        <tr>
                            <th>Nombre</th>       
                            <th>Genero</th>
                            <th>Cedula</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>FechaIngreso</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                   </thead>
                   <tbody>
                            <?php
                                while($filas = mysqli_fetch_assoc($result)){

                               
                            ?>    
                            <tr>

                                <td> <?=$filas['nombre'] ?> </td> 
                            
                                <td> <?= $filas['genero'] ?> </td> 
                                <td> <?= $filas['cedula'] ?> </td> 
                                <td> <?= $filas['telefono'] ?> </td> 
                                <td> <?= $filas['dirreccion'] ?> </td> 
                                <td> <?= $filas['fechaIngreso'] ?> </td> 
                                <td> <?= $filas['correo'] ?> </td> 
                                <td> <?= $filas['estado'] ?> </td> 
                                                        
                                <!-- /*Editar */ -->
                                <td class="opciones">
                                    <?="<a  class='update' href='updateVoluntario.php? id=" .$filas['idVoluntario']."'>EDITAR </a>";?>
                                    <?="<a  class='delete' href='eliminarVoluntario.php? id=" .$filas['idVoluntario']."'>ELIMINAR </a>";?>

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

 