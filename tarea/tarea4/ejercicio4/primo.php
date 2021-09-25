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
    $divisor = 1;
    $divisores = 0;
    $num = 5;
    do{
    if($num % $divisor == 0){
    $divisores++;
    }
    $divisor++;
    }while($divisor <= $num);
    if($divisores == 2){
    echo "El numero ",$num," es PRIMO";
    }else{
    echo "El numero ",$num," NO es PRIMO.";
    }
    ?>
</body>
</html>