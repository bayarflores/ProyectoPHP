<?php
 require_once "conexion.php"; 
  

if (isset($_POST["edit"])) {
    
    $id = $_POST['id'];
    $numeroBrigada = $_POST['numeroBrigada'];
    $nombre = $_POST['nombre'];
    $encargado = $_POST['encargado'];
    $tipoBrigada = $_POST['tipoBrigada'];
    $fecha = $_POST['fecha'];
    $numeroAgenda=$_POST['numeroAgenda'];

    $sql = "UPDATE brigada SET numeroBrigada='$numeroBrigada', nombreB='$nombre', encargado='$encargado', tipoBrigadda='$tipoBrigada', 
                              fecha='$fecha', agendaId='$numeroAgenda'   WHERE  idBrigada='$id'";

    
    $result = mysqli_query($conexion, $sql);

    if($result){
        echo" <script language='JavaScript'>
                alert('Registro actualizado con exito');
                location.assign('brigada.php');
            </script>";
    }
    else{
        echo" <script language='JavaScript'>
        alert('Error no se realizo actualizacion del registro );
        location.assign('brigada.php');
        </script>";
    }

 


}else if (isset($_POST["cancel"])){
    
    echo" <script language='JavaScript'>
    alert('Se cancela actualizacion del registro );
    location.assign('brigada.php');
    </script>";
}
 
?>