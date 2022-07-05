<?php
require_once "class_dispenser.php";
$galon = new Minuman("Air", 2500);
$galon->isiGalon(2500);
echo ("</br>");
$galon->cetakDispenser();
echo ("</br>");
$galon->isiGelas(120);
echo ("</br>");
$galon->isiUlangGelas(20);
echo ("</br>");
$galon->cetakDispenser();