<?php
 require_once "conexion.php";  

 if(isset($_POST['nuevo'])){
    
    $id = null;
    $numeroAgenda = $_POST['numeroAgenda'];
    $solicitante = $_POST['solicitante'];
    $lugar = $_POST['lugar'];
    $fechaSolicitud = $_POST['fechaSolicitud'];
    $estado = $_POST['estado']; 

    $sql = "insert into agenda(numeroAgenda, solicitante, lugar, fechaSolicitud, estado) values ('$numeroAgenda', '$solicitante', '$lugar', '$fechaSolicitud', '$estado')";

    $result = mysqli_query($conexion, $sql);
    
    if($result){
        echo" <script language='JavaScript'>
                alert('Registro con exito');
                location.assign('agenda.php');
            </script>";
    }
    else{
        echo" <script language='JavaScript'>
        alert('Error no se realizo el registro );
        location.assign('agenda.php');
         </script>";

    }
    mysqli_close($conexion);
 }



?>