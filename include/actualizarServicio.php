<?php
 require_once "conexion.php"; 
  

if (isset($_POST["edit"])) {
    
    $id = $_POST['id'];
    $voluntario = $_POST['voluntario'];
    $brigada = $_POST['brigada'];
    $hora = $_POST['hora']; 
    $fecha = $_POST['fecha'];

    $sql = "UPDATE servicio SET voluntarioId='$voluntario', brigadaId='$brigada',  horas='$hora', fechaServicio='$fecha' WHERE id='$id'";

    
    $result = mysqli_query($conexion, $sql);

    if($result){
        echo" <script language='JavaScript'>
                alert('Registro actualizado con exito');
                location.assign('servicio.php');
            </script>";
    }
    else{
        echo" <script language='JavaScript'>
        alert('Error no se realizo actualizacion del registro );
        location.assign('servicio.php');
        </script>";
    }

 


}else if (isset($_POST["cancel"])){
    
    echo" <script language='JavaScript'>
    alert('Se cancela actualizacion del registro );
    location.assign('voluntario.php');
    </script>";
}
 
?>