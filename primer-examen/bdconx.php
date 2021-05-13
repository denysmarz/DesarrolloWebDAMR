<?php
$conex = new mysqli("localhost","root","","bd_banco");
if ($conex->connect_error)
 die ("conexion fallada".$conex->connect_error);
?>