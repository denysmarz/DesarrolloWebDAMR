<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $ruser = isset($_POST['ruser'])?$_POST['ruser']:null;
    $rpass = isset($_POST['rpass'])?$_POST['rpass']:null;

    if($ruser != null){
        setcookie("user",$user);
    }else {
        setcookie("user",$user, time()-60);
    }

    if($rpass != null){
        setcookie("pass",$pass);
    }else {
        setcookie("pass",$pass, time()-10);
    }
    echo "Usuario: $user<br>";
    echo "Password: $pass";

?>