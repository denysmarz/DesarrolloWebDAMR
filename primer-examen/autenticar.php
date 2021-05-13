<?php session_start();
include("bdconx.php");

$usuario =$_POST['nombre'];
$clave = sha1($_POST['contraseña']);


$consulta = "SELECT nombres,apellidos,nivel FROM usuarios WHERE nombres = '$usuario' and password = '$clave' ";

$resultado = mysqli_query($conex,$consulta);

$filas = mysqli_fetch_array($resultado);


if($fila!=null){
    header("location:index.php");
}
else{
    echo "error en la autenticacion";
}
?>
