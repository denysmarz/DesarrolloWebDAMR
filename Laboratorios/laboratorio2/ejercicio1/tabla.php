<?php
    $f = $_POST['f'];
    $c = $_POST['c'];

    $fil=1;
    $col=1 ;
    echo "<table border='1'>";
    for ($i = 0; $i < $f; $i++)
    {
        if($i==0){
            echo    "<td bgcolor='red' width='50px'>&nbsp</td>";
            while($col<=$c){
                echo "<th bgcolor='red' width='50px'>","<font color='#FFFFFF'>",$col,"</font>","</th>";
                $col++;
            }
        }
        echo "<tr>";
        for ($j = 0; $j < $c; $j++)
        {
            if($j==0){
                echo "<th bgcolor='red' width='50px'>","<font color='#FFFFFF'>",$fil,"</font>","</th>";
                $fil++;
            }
           
            echo "<td>",($i+1)*($j+1),"</td>";
            
        }
        echo"</tr>";
    }
    echo"</table>";

?>