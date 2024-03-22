<?php
    require_once "conexion.php";  
   

    $usuario = $_POST['usuario'];
    $pwd = $_POST['contrasena'];
    
   //$_SESSION['usuario'] = $usuario;
    
    $sql = "select*from usuario where userName = '$usuario' and contraseña = '$pwd' ";
    $result = mysqli_query($conexion, $sql); 
   
    $fila = mysqli_fetch_array($result);
    //$_SESSION['usuario'] = $fila; //prueba

   if($usuario != "" and $pwd != ""){
        if( $fila['userName'] == $usuario and $fila['contraseña'] == $pwd){

            session_start();
            $_SESSION['usuario'] = $fila['userName']; 
            $_SESSION['rol'] = $fila['rolId']; 

            if(($_SESSION['rol'] == 1) || ($_SESSION['rol'] == 2) ){
                header("Location: inicio.php");
            }
            // else if($_SESSION['rol'] == 2){
            //     header("Location: inicio2.php");
            // }  
        }   
        else{
            echo" <script language='JavaScript'>
            alert('Usuario o contraseña incorrecto');
            location.assign('../login.php');
                </script>";
            // echo "Usuario o contraseña incorrecto";
            // header("Location: ../login.php");
        }
    
   }
   else{ 
        echo" <script language='JavaScript'>
        alert('Favor llenar todos los campos');
        location.assign('../login.php');
            </script>";
        // echo "Favor llenar todos los campos";
        // header("Location: ../login.php");
   } 
    // Kmembreño 	Karen Membreño 	kml%2023 	kmembreño@gmail.com 	1
    // EvelingM 	Eveling Martinez 	em$#2023 	emartinez@gmail.com 	2
?> 

