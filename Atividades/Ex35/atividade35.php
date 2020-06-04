<?php

echo "<br>Toda a Matriz<br>";
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

echo "<br>Matriz somente com Números ímpares<br>";
for ($i=0; $i < 5; $i++) {      
        for ($j=0; $j < 5; $j++) {                
            if ((($i*5) + $j + 1) % 2 != 0)
            {
                echo ($i*5) + $j + 1 . " ";
            }
        }
}

echo "<br>Matriz somente com Números Pares<br>";
for ($i=0; $i < 5; $i++) {      
        for ($j=0; $j < 5; $j++) {                
            if ((($i*5) + $j + 1) % 2 == 0)
            {
                echo ($i*5) + $j + 1 . " ";
            }
        }
}
