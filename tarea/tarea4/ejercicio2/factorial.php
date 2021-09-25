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
        $n = 5 ;
        $fact = 1;
        if($n<0) $fact = 0;
        else if($n == 0) $fact = 1;
        else{
           for ($i = 1; $i <= $n; $i++){
             $fact = $fact * $i;
           }
        }
        echo "Factorial de ",$n," es ",$fact;
    ?>
</body>
</html>