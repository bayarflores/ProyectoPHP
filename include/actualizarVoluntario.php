<?php
 require_once "conexion.php"; 
  

if (isset($_POST["edit"])) {
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    // $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $fechaIngreso = $_POST['fechaIngreso'];
    $estado = $_POST['estado'];

    $sql = "UPDATE voluntario SET nombre='$nombre', cedula='$cedula', genero='$genero', dirreccion='$direccion',     telefono='$telefono', correo='$correo', fechaIngreso='$fechaIngreso',   estado='$estado'  WHERE idVoluntario='$id'";

    
    $result = mysqli_query($conexion, $sql);

    if($result){
        echo" <script language='JavaScript'>
                alert('Registro actualizado con exito');
                location.assign('voluntario.php');
            </script>";
    }
    else{
        echo" <script language='JavaScript'>
        alert('Error no se realizo actualizacion del registro );
        location.assign('voluntario.php');
        </script>";
    }

 


}else if (isset($_POST["cancel"])){
    
    echo" <script language='JavaScript'>
    alert('Se cancela actualizacion del registro );
    location.assign('voluntario.php');
    </script>";
}
 
?>