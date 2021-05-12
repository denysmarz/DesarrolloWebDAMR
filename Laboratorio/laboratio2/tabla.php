<?php
$cantColumna= $_POST['m'];
$cantFila=$_POST['n'];

$cfila=1;
$contador = 0;

echo"<table border=2>";

for($fila=1;$fila<=$cantFila+1; $fila++)
{
    echo"<th> $fila </th>";
    echo"<tr>";
    //echo"<th> $fila </th>";
    //if($fila==1){echo "<th>$fila</th>";}
    
   

for($col=1; $col<=$cantColumna;$col++)
{
    
    if($col==1){echo "<th>$fila</th>";}
    $contador = $col + $fila;
    echo"<td> $contador  </td>";
    
    
}
echo "</tr>";

}

echo "</table>";
?>
