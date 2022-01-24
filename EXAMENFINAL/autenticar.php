<?php 
$nombrecompleto=$_POST['nombrecompleto'];
$password=sha1($_POST['password']);
include("conexion.php");

$sql="select nombrecompleto, password from usuarios 
where nombrecompleto='$nombrecompleto' and password='$password'";

$query=mysqli_query ($con, $sql);
if($query){
   echo "<a href='javascript:datos()'></a>";

}
else
    echo "NO hay datos";

?>