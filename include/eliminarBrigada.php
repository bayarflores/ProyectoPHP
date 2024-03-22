<?php
 require_once "conexion.php";  

//  se utiliza el método GET para recuperar los datos. 
// Por el contrario, el método POST se utiliza para almacenar o actualizar los datos.

 $id = $_GET['id']; 
 
 $sql = "delete from brigada where idBrigada = '$id' ";  
 $result = mysqli_query($conexion, $sql);

 if($result){
   echo $id;
    echo" <script language='JavaScript'>
    alert('Brigada eliminada con exito');
    location.assign('brigada.php');
    </script>";
 }


?>