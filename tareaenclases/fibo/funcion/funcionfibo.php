<?php
function fibonacci($n)
    {
        $aux = 1;
        $fib = 0; 
        $lim = $n;
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
    }
?>