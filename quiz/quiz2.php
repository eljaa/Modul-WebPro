<?php
$NIP=120103045;
$namapegawai = "Elza";
$a=2000000;
$b=500000;
$c= $a*5/100;
$pajak =$a*10/100;
$total= $a+ $b + $c - $pajak;
echo "=======================<br>";
echo "NIP =$NIP <br>";
echo "Nama pegawai = $namapegawai<br>";
echo "=======================<br>";
echo "Gaji Pokok = $a<br>";
echo "Bonus = Rp. $b<br>";
echo "Tunjangan = Rp. $c<br>";
echo "Pajak = Rp. $pajak<br>";
echo "=======================<br>";
$bersih=$a+ $b + $c - $pajak;
echo "Gaji yang harus dibayarkan = Rp". $bersih;
?>