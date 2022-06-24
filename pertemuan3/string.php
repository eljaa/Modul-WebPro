<?php
$namaDepan = "Ibnu"; # pakai tanda petik dua
$namaBelakang = 'Jakaria'; # pakai tanda petik satu

# menggabungkan dua variable dengan tanda
# petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namaLengkap2 = $namaDepan . '' . $namaBelakang;

# [Tampilan Data]
# kita bisa memasukkan variable lain jika menggunkan tanda petik dua
echo "Nama Depan: {$namaDepan} <br>";
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variable
# di dalam string akan tetapi menggabungkannya dengan operator titik (.)
echo 'Nama Belakang: ' . '<br>';

echo $namaLengkap;