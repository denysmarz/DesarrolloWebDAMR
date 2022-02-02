<?php
include("conexion.php");
$comentario=$_POST['comentario'];

$id=$_POST['id'];

$sql="INSERT INTO comentarios(id,idnoticia,comentario)
values ('$id','$id','$comentario') ";

//echo $sql;

$resultado = mysqli_query($conn, $sql);

?>
<div>Se inserto con éxito</div>
<button class="celeste-bg" onclick="pregunta5()" id="boton">ver base de datos</button>
<?php

?>
