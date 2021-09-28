<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    
    <?php
        $iLinha = rand(10, 30);
        $iColuna = rand(10, 30);
        for ($i = 1; $i <= $iLinha; $i++) {
            for($j = 1; $j <= $iColuna; $j++) {
                $aArray[$i][$j] = rand(0, 100);
            }
        }

        echo '<table border="1">';
        
        for ($i = 1; $i <= $iLinha; $i++) {
        echo '<tr>';
            for($j = 1; $j <= $iColuna; $j++) {
                echo '<td>';
                echo $aArray[$i][$j]. ' ';
                echo '</td>';
            }      
        echo '</tr>';  
        }     
          
        echo '</table>';
    ?>

</body>
</html>