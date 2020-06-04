<?php

echo '<table border="1" style="width:100px">';
for ($i=0; $i < 5; $i++) {      
    echo "<tr>";
        for ($j=0; $j < 5; $j++) { 
            echo "<td>";                
            echo ($i*5) + $j + 1;
            echo "</td>";
            }
    echo "</tr>";
}
echo "</table>";

echo "<br>Elementos da Diagonal Principal<br>";
for ($i=0; $i < 5; $i++) {      
        for ($j=0; $j < 5; $j++) {                
            if ($i == $j)
            {
                echo ($i*5) + $j + 1 . " ";
            }
        }
}
echo "</table>";