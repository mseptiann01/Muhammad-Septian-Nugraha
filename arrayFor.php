<?php

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Looping For Array</title>
    </head>
    <body>
        <?php
        
            for ($i = 0; $i < count($nama); $i++)   {       //count berguna untuk menentukan jumlah elemen ada array.
                                                            //sehingga looping akan berhenti ketika isi array sudah tampil semua.
                echo "<li>$nama[$i]</li>";
            }

            ?>
    </body>
</html>