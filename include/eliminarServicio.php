<?php
 require_once "conexion.php";  

 $id = $_GET['id'];

 
 $sql = "delete from servicio where id = '$id' "; 

 $result = mysqli_query($conexion, $sql);

 if($result){
    echo" <script language='JavaScript'>
    alert('Registro eliminado con exito');
    location.assign('servicio.php');
    </script>";
 }


?>