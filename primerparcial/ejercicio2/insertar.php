<?php
    session_start();

    $nombre = $_POST['nombre'];
  

    $_SESSION['nombre']=$nombre;
    
    //echo '<meta http-equiv="refresh" content="0;url=menu.php">';

?>