<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangles</title>
</head>
<body>
    <form name="form" method="post">
        entrer largeur des triangles: 
        <input type="number" name="n">
        <br></br>
    </form>

    <?php
        // dessiner les triangles

        @$n= $_POST['n'];
        $ni= $n/2;
        
        for($i=1; $i<=$n; $i++){
            for($j=1; $j<=$i; $j++){
                echo("*");
            }
            echo("<br>");
        }
        echo("<br>");

        for($i=1; $i<=$ni; $i++){
            for($j=$ni; $j>=$i; $j--){
                echo(" &nbsp");
            }
            for($k=1; $k<=$i; $k++){
                echo("*");
            }

            for($k=0; $k<$i; $k++){
                if($k>0){
                    echo("*");
                }
            }
            echo("<br>");
        }
    ?>

</body>
</html>