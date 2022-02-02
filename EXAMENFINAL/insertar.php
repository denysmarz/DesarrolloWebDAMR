<?php
include("conexion.php");
$titulo=$_POST['titulo'];
$imagen=$_POST['imagen'];
$texto=$_POST['texto'];
$tiponoti=$_POST['tiponoti'];
$fecha=date("y/m/d H:i:s");



//$nombre_imagen_temporal=$_FILES['imagen']['tmp_name'];

//copy($nombre_imagen_temporal,"images/".$imagen);

$sql="INSERT INTO noticias(imagen,titulo,texto,idtiponoticia,fecha)
values ('$imagen','$titulo','$texto','$tiponoti','$fecha') ";

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se inserto con éxito</div>
<button class="celeste-bg" onclick="listar()" id="boton">ver base de datos</button>
<?php
//echo $titulo;
//echo $texto;
//echo $tiponoti;
//echo $imagen;
//echo $resultado;
?>
