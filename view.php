<?php

$bulan = array("Januari", "Febuari", "Maret", "April", "Mei");
$angka = [1,2,3,4,5,6,7,8,9,10,11];

echo "ini isi array bulan   :   </br>";
var_dump($bulan);
echo "</br>";

echo "ini isi array angka   :   </br>";
$bulan[] = "Juni";
print_r($angka);
echo "</br>";

echo "ini isi index ke 2 dari array bulan   :   </br>";
echo $bulan[5];
echo "</br>";

?>