<?php
include("conexion.php");
$correo=$_POST['correo'];
$password=sha1($_POST['password']);
$nombre=$_POST['nombrecompleto'];
$cu=$_POST['cu'];
$nivel=$_POST['nivel'];

$correo1=$_POST['correo1'];
$password1=sha1($_POST['password1']);
$nombre1=$_POST['nombrecompleto1'];
$cu1=$_POST['cu1'];
$nivel1=$_POST['nivel1'];

$correo2=$_POST['correo2'];
$password2=sha1($_POST['password2']);
$nombre2=$_POST['nombrecompleto2'];
$cu2=$_POST['cu2'];
$nivel2=$_POST['nivel2'];

$sql="INSERT INTO usuarios(correo,`password`,nombrecompleto,cu,nivel)
values ('$correo','$password','$nombre','$cu','$nivel') ";

$sql1="INSERT INTO usuarios(correo,`password`,nombrecompleto,cu,nivel)
values ('$correo1','$password1','$nombre1','$cu1','$nivel1') ";

$sql2="INSERT INTO usuarios(correo,`password`,nombrecompleto,cu,nivel)
values ('$correo2','$password2','$nombre2','$cu2','$nivel2') ";
//echo $sql;

$resultado = mysqli_query($conn, $sql);
$resultado1 = mysqli_query($conn, $sql1);
$resultado2 = mysqli_query($conn, $sql2);

?>
<div>Se inserto con éxito</div>
<button class="celeste-bg" onclick="listarusuario()" id="boton">ver base de datos</button><br>
<?php
echo $correo;
echo $password;
echo $nombre;
echo $cu;
echo $nivel;
?>