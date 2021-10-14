<?php
    session_start();

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $_SESSION['a']=$a;
    $_SESSION['b']=$b;
    $_SESSION['c']=$c;

    echo '<meta http-equiv="refresh" content="0;url=menu.php">';

?>