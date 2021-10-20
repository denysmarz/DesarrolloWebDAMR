<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="contenedor">
        <div class="primero">
            <center>
            <img src="logo.png" height="80px">
            <img src="usfx.png" height="80px">
        </center>
            <p class="text-iz">carrera Ing de Sistemas -Ing en ciencias de la Computación</p>
            <p class="text-dere">Semestre 2-2021</p>
        </div>


        <div class="medio">
            <div class="sub-uno">
            
                    Pregunta 1 <br>
                    Pregunta 2
            
            </div>
            <div class="sub-dos">
                <p>
                    Primer Examen de Programación Internet intranet
                </p>
            </div>
            <div class="sub-tres">
                Pregunta 3 <br>
                Pregunta 4
            </div>
        </div>


        <div class="final">
            <center>
                <p>
                    Alumno: Denys alexnader Mamani Ramirez<br>
                    CU: 111-68<br>
                    <?php
                        if (isset($_COOKIE['contador']))
                        {
                            $contador = $_COOKIE['contador'];
                            $contador++;
                        }
                        else
                        {
                            $contador = 1;
                        }
                        setcookie('contador', $contador, time()+3600);
                        echo "Nro de visitas al sitio: $contador veces";
                    ?>
                </p>
            </center>
        </div>
    </div>
</body>
</html>