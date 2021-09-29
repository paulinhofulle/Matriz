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
        $iLinha = 70;
        $iColuna = 5;
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

        echo "Página: ". $_GET["pagina"] ."<br>";
        echo "Cor: ". $_GET["cor"] ."<br>";
        echo "Tamanho: ". $_GET["tamanho"] ."<br>";
    ?>

</body>
</html>