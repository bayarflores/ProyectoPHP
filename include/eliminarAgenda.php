<?php
 require_once "conexion.php";  

 $id = $_GET['id'];

 
 $sql = "delete from agenda where id = '$id' "; 

 $result = mysqli_query($conexion, $sql);

 if($result){
    echo" <script language='JavaScript'>
    alert('Agenda eliminada con exito');
    location.assign('agenda.php');
    </script>";
 }


?>