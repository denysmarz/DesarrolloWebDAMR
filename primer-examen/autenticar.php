<?php session_start();
include("bdconx.php");

$usuario =$_POST['nombre'];
$clave = $_POST['contraseña'];

$consulta = "SELECT * FROM nombres WHERE nombres = '$usuario' ";

$resultado = mysqli_query($conex,$consulta);

$filas = mysqli_fetch_array($resultado);


if($fila>0){
    header("location:index.php");
}
else{
    echo "error en la autenticacion";
}
/*and password = '$clave'*/
