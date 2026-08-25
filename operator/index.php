<?php

$a = 10;
$b = 3;

echo "<h2>Operator Aritmatika</h2>";

echo "Penjumlahan: " . ($a + $b) . "<br>";
echo "Pengurangan: " . ($a - $b) . "<br>";
echo "Perkalian: " . ($a * $b) . "<br>";
echo "Pembagian: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Pangkat: " . ($a ** $b) . "<br>";

echo "<h2>Operator Perbandingan</h2>";

$x = 10;
$y = 10;

var_dump($x == $y);
echo "<br>";

var_dump($x === $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x > 5);
echo "<br>";

var_dump($x < 5);
echo "<br>";

echo "<h2>Operator Logika</h2>";

$age = 18;
$hasId = true;

var_dump($age >= 17 && $hasId);
echo "<br>";

var_dump($age >= 17 || $hasId);
echo "<br>";

var_dump(!$hasId);