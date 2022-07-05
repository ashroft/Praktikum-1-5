<?php
require_once "class_persegipanjang.php";
$persegiPanjang1 = new PersegiPanjang(7, 12);
$persegiPanjang2 = new PersegiPanjang(5, 10);
echo "Luas Persegi Panjang I : " . $persegiPanjang1->getLuas();
echo "</br>Luas Persegi Panjang II : " . $persegiPanjang2->getLuas();
echo "</br>Keliling Persegi Panjang I : " . $persegiPanjang1->getKeliling();
echo "</br>Keliling Persegi Panjang II : " . $persegiPanjang2->getKeliling();