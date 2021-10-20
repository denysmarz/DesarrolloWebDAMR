<?php
    include ('listalumnos.php');
    session_start();
    
   /// $lista=new listalumnos($_SESSION['nombre']);
    $lista = new SplStack();
    $lista->push($_SESSION['nombre']);
    while( $lista->valid() )
                {
                    echo $lista->current(), PHP_EOL;
                    $lista->next();
                }

?>