<?php
    include ('operaciones.php');
    session_start();
    
    $op=new operaciones($_SESSION['a'],$_SESSION['b'],$_SESSION['c']);

    $op->mostrarcalculos();

?>