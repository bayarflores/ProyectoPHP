<?php
 
 // Conexión a la base de datos

$server = "localhost";
$username  = "root";
$password  = "";
$database  = "juventud_bd";
$conexion = mysqli_connect($server, $username, $password, $database);

 
// // Verificar conexión,  
/*die = finaliza la ejecución del script y mostrar un mensaje de error personalizado.
connect_error = mensaje de error específico que se almacena en la propiedad "connect_error".
*/
if (!$conexion) {
    die("Error de conexión: " . $conexion->connect_error);
}


?>