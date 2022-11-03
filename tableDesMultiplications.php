<?php
   
    for ($j =1; $j<=12;$j++){
        echo "<table border = 1 ";
            for($k =1; $k <=12;$k++){
                echo"<tr>"; 
                    echo "<td>";
                    echo "$j *$k";
                    echo "</td>";
                    echo "<td>";
                    $total=$j*$k;
                    echo "=$total";
                    echo "</td>";
                echo "</tr>";
            }
            echo "<tr> &nbsp</tr>";
        echo "<table>";
    }
    
?>