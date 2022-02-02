<?php 
$nombrecompleto=$_POST['nombcompleto'];
$password=sha1($_POST['password']);

include 'conexion.php';

$sql="select * from usuarios where nombrecompleto='$nombrecompleto' and `password`='$password'";

$query=mysqli_query ($conn, $sql);
$fila = mysqli_fetch_array($query);
if($fila){
   
    echo "AUTENTICADO CON EXITO";

}
else{
 echo "ERROR EN LOS DATOS";
 $nombrecompleto= 0;
 $password=0;
}
?>