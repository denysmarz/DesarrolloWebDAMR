<?php
$cantColumna= $_POST['m'];
$cantFila=$_POST['n'];

$cfila=1;
$contador = 0;
echo"<table border=2>";

for($fila=1;$fila<=$cantFila; $fila++)
{
    echo"<tr>";
    echo"<th> $fila </th>";
   
   

for($col=1; $col<=$cantColumna;$col++)
{
    $contador = $col + $fila;
    echo"<td> $contador  </td>";
    
}
echo "</tr>";

}

echo "</table>";
?>
