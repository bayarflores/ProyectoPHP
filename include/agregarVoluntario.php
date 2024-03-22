<?php
 require_once "conexion.php";  

 if(isset($_POST['nuevo'])){
    
    $id = null;
    $nombre = $_POST['nombre'];
    // $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $fechaIngreso = $_POST['fechaIngreso'];
    $estado = $_POST['estado'];

    $sql = "insert into voluntario(nombre, cedula, genero, dirreccion, telefono, correo, fechaIngreso, estado) values ('$nombre', '$cedula', '$genero', '$direccion', '$telefono',
    '$correo', '$fechaIngreso', '$estado')";

    $result = mysqli_query($conexion, $sql);
    
    if($result){
        echo" <script language='JavaScript'>
                alert('Registro con exito');
                location.assign('voluntario.php');
            </script>";
    }
    else{
        echo" <script language='JavaScript'>
        alert('Error no se realizo el registro );
        location.assign('voluntario.php');
         </script>";

    }
    mysqli_close($conexion);
 }



?>