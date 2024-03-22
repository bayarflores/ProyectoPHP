<?php
 require_once "conexion.php"; 
  

if (isset($_POST["edit"])) {
    
    $id = $_POST['id'];
    $numeroAgenda = $_POST['numeroAgenda'];
    $solicitante = $_POST['solicitante'];
    $lugar = $_POST['lugar'];
    $fechaSolicitud = $_POST['fechaSolicitud'];
    $estado = $_POST['estado'];

    $sql = "UPDATE agenda SET numeroAgenda='$numeroAgenda', solicitante='$solicitante', lugar='$lugar', fechaSolicitud='$fechaSolicitud', estado='$estado'  WHERE id='$id'";

    
    $result = mysqli_query($conexion, $sql);

    if($result){
        echo" <script language='JavaScript'>
                alert('Registro actualizado con exito');
                location.assign('agenda.php');
            </script>";
    }
    else{
        echo" <script language='JavaScript'>
        alert('Error no se realizo actualizacion del registro );
        location.assign('agenda.php');
        </script>";
    }

 


}else if (isset($_POST["cancel"])){
    
    echo" <script language='JavaScript'>
    alert('Se cancela actualizacion del registro );
    location.assign('agenda.php');
    </script>";
}
 
?>