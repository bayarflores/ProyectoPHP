<?php
 require_once "conexion.php";  

 if(isset($_POST['nuevo'])){
    
    $id = null;
    $numeroBrigada= $_POST['numeroBrigada'];
    $nombre = $_POST['nombre'];
    $encargado = $_POST['encargado'];
    $fecha = $_POST['fecha'];
    $tipoBrigada = $_POST['tipoBrigada']; 
    $numeroAgenda =$_POST['numeroAgenda'];

    $sql = "insert into brigada(numeroBrigada, nombreB, encargado, fecha, tipoBrigadda, agendaId) values 
    ('$numeroBrigada', '$nombre', '$encargado', '$fecha', '$tipoBrigada', '$numeroAgenda')";

    $result = mysqli_query($conexion, $sql);
    
    if($result){
        echo" <script language='JavaScript'>
                alert('Registro con exito');
                location.assign('brigada.php');
            </script>";
    }
    else{
        echo" <script language='JavaScript'>
        alert('Error no se realizo el registro );
        location.assign('brigada.php');
         </script>";

    }
    mysqli_close($conexion);
 }



?>