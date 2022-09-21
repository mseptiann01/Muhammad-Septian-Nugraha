<?php

$warna = ["Hijau, ", "Kuning, ", "Kelabu, ", "Merah muda, ", "Biru"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
        balonku ada lima<br>
        Rupa-rupa warnanya<br>
        
        <?php
            for ($i = 0; $i < 4; $i++){
            echo "$warna[$i]";
        }
        ?>
        dan 
        <?php
            echo "$warna[4]<br>";
        ?>
        meletus balon 
        <?php
            echo "$warna[0]";
        ?>
        Dorr!!!<br>
        Hatiku sangat kacau.
        </p>
    </body>
</html>