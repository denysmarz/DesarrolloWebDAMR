<form action="autenticar.php" method="POST">

    <?php
        if(isset($_COOKIE['user'])){
            echo '<label for="">Usuario</label>
            <input type="text" name="user" value="'.$_COOKIE['user'].'">
            Recordar User<input type="checkbox" name="ruser" id=""checked>
            <br><br>';
        }else{
            echo '<label for="">Usuario</label>
            <input type="text" name="user">
            Recordar User<input type="checkbox" name="ruser" id="">
            <br><br>';
        }

        if(isset($_COOKIE['pass'])){
            echo  '<label for="">Password</label>
            <input type="text" name="pass" value="'.$_COOKIE['pass'].'">
            Recordar Pass<input type="checkbox" name="rpass" checked id="">
            <br><br>';
        }else{
            echo '<label for="">Password</label>
            <input type="text" name="pass">
            Recordar Pass<input type="checkbox" name="rpass" id="">
            <br><br>';
        } 
       

    ?>

    <button type="submit">Enviar</button>

</form>