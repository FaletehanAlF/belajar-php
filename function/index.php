<?php

// ==========================
// FUNCTION SEDERHANA
// ==========================

function sayHello()
{
    echo "Hello, PHP!";
}

echo "<h2>FUNCTION SEDERHANA</h2>";

sayHello();


// ==========================
// FUNCTION DENGAN PARAMETER
// ==========================

function greet($name)
{
    echo "Hello, " . $name;
}

echo "<h2>PARAMETER</h2>";

greet("Faletehan");


// ==========================
// FUNCTION DENGAN RETURN
// ==========================

function add($a, $b)
{
    return $a + $b;
}

echo "<h2>RETURN</h2>";

$result = add(10, 5);

echo "Hasil: " . $result;


// ==========================
// FUNCTION DENGAN DEFAULT PARAMETER
// ==========================

function welcome($name = "Guest")
{
    return "Welcome, " . $name;
}

echo "<h2>DEFAULT PARAMETER</h2>";

echo welcome();

echo "<br>";

echo welcome("Faletehan");


// ==========================
// FUNCTION UNTUK MENGHITUNG LUAS
// ==========================

function calculateArea($length, $width)
{
    return $length * $width;
}

echo "<h2>CALCULATE AREA</h2>";

$area = calculateArea(10, 5);

echo "Luas: " . $area;


// ==========================
// TYPE DECLARATION
// ==========================

function multiply(int $a, int $b): int
{
    return $a * $b;
}

echo "<h2>TYPE DECLARATION</h2>";

echo "Hasil: " . multiply(4, 5);