<?php
 require_once "conexion.php";  

 if(isset($_POST['nuevo'])){
    
    $id = null;
    $voluntario= $_POST['voluntario'];
    $brigada = $_POST['brigada'];
    $horas = $_POST['hora'];
    $fecha = $_POST['fecha'];
   

    $sql = "insert into servicio(voluntarioId, brigadaId, horas, fechaServicio) values 
    ('$voluntario', '$brigada', '$horas', '$fecha')";

    $result = mysqli_query($conexion, $sql);
    
    if($result){
        echo" <script language='JavaScript'>
                alert('Registro con exito');
                location.assign('servicio.php');
            </script>";
    }
    else{
        echo" <script language='JavaScript'>
        alert('Error no se realizo el registro );
        location.assign('servicio.php');
         </script>";

    }
    mysqli_close($conexion);
 }



?>