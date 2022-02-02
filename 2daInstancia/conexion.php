<?php
$conn=new mysqli("localhost","root","","bd_noticias");
if($conn->connect_error){
    echo "Error al conectar con la base de datos";
    exit();
}
?>