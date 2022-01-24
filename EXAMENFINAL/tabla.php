<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php
    $filas = $_GET['filas'];
    $columnas = $_GET['columnas'];
    ?>
    <table border="1">
        <?php
        
        for ($i = 0; $i < $columnas; $i++) {
        ?> <tr>
                <?php
                for ($j = 0; $j < $filas; $j++) {

                    if ($j % 2 == 0) {
                        if ($i % 2 == 0) {
                            echo '<td class="cele">&nbsp;&nbsp;&nbsp;</td>';
                        }
                        else {
                            echo '<td class="blan">&nbsp;&nbsp;&nbsp;</td>';
                        }
                    } else {
                        if ($i % 2 == 0) {
                            echo '<td class="blan">&nbsp;&nbsp;&nbsp;</td>';

                        }
                        else    {
                            echo '<td class="cele">&nbsp;&nbsp;&nbsp;</td>';
                        }
                    }
                    
                }
                ?>
            </tr>
        <?php
        }
        ?>


    </table>

</body>

</html>