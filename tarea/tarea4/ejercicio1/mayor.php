<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = 50;
        $n2 = 20;
        $n3 = 30;
        if($n1>$n2 && $n1>$n3)
            echo "El mayor es = ", $n1;
            if($n2>$n1 && $n2>$n3)
            echo "El mayor es = ", $n2;
            if($n3>$n1 && $n3>$n2)
            echo "El mayor es = ", $n3;
    ?>
</body>
</html>