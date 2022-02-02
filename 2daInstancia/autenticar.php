<?php session_start();
include 'conexion.php';
$nombre=$_POST['nombre'];
$password=sha1($_POST['password']);

$sql="select * from usuarios where nombrecompleto='$nombre' and `password`='$password'";

$query=mysqli_query ($conn, $sql);
$fila = mysqli_fetch_array($query);
if($fila){
    $_SESSION['nivel']=$fila['nivel'];
    $_SESSION['nombre']=$fila['nombrecompleto'];
    echo "AUTENTICADO CON EXITO";
   echo $_SESSION['nombre'];
   header('Location: index.php');
}
else{
 echo "ERROR EN LOS DATOS";
 echo $nombre;
 echo $password;
}
?>