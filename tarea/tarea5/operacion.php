<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>elejir operacion</h1>
    <?php
        $n=$_POST['n'];
    ?>
    <form action="suma.php" method="POST">
        <input type="hidden" name="n" value= "<?php echo $n;?>">
        <input type="submit" value= "suma"><br>
    </form>
    <form action="resta.php" method="POST">
        <input type="hidden" name="n" value= "<?php echo $n;?>">
        <input type="submit" value= "resta"><br>
    </form>
    <form action="multi.php" method="POST">
        <input type="hidden" name="n" value= "<?php echo $n;?>">
        <input type="submit" value= "multiplicaion">
    </form>
</body>
</html>