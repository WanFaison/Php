<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table des Multiplications</title>
</head>
<body>
    <form name="form" method="post">
        entrer numero a consulter: 
        <input type="number" name="n">
        <br></br>
    </form>

    <table>
        <tbody>
            <?php
                function tableMulti($n){
                    $i=1;
                    while($i<=12){
                        $m= $i*$n;
                        echo($n." * ".$i." = ".$m."<br>");
                        $i++;
                    }
                }

                function multiply($a, $b){
                    return $a*$b;
                }

                @$n= $_POST['n'];
                echo(tableMulti($n));
                
                // echo "<table border = 1";
                // for($i=1; $i<=12; $i++){
                //     echo"<tr>";
                //     for($d=1; $d<=12; $d++){
                //         echo"<td>";
                //         echo"$i*$d";
                //         echo"</td>";
                //         $pdt=$i*$d;
                //         echo"<td>=";
                //         echo $pdt;
                //         echo"</td>";
                        
                //         echo("<tr>");
                //         echo("</tr>");
                //      }
                //      echo"</tr>";
                //  }
                //  echo "<tsble>";
            ?>
        </tbody>
    </table>
</body>
</html>