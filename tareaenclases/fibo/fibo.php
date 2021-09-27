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
        $aux = 1;
        $fib = 0; 
        $lim = 5;
        $init;
        
        if($lim > 0) {
        for($init = 1; $init <= $lim; $init++) {
            echo "[", $fib, "] ";
            $aux += $fib; 
            $fib = $aux - $fib;
        }
        } else {
        echo "El numero debe ser mayor a cero!!";
        }
        
    ?>
</body>
</html>