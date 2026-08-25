<?php

// ==========================
// IF / ELSE
// ==========================

$age = 18;

echo "<h2>IF / ELSE</h2>";

if ($age >= 17) {
    echo "Kamu sudah cukup umur.";
} else {
    echo "Kamu belum cukup umur.";
}


// ==========================
// IF / ELSEIF / ELSE
// ==========================

$score = 85;

echo "<h2>IF / ELSEIF / ELSE</h2>";

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    echo "Grade: B";
} elseif ($score >= 70) {
    echo "Grade: C";
} elseif ($score >= 60) {
    echo "Grade: D";
} else {
    echo "Grade: E";
}


// ==========================
// SWITCH
// ==========================

$day = "Monday";

echo "<h2>SWITCH</h2>";

switch ($day) {
    case "Monday":
        echo "Hari Senin";
        break;

    case "Tuesday":
        echo "Hari Selasa";
        break;

    case "Wednesday":
        echo "Hari Rabu";
        break;

    case "Thursday":
        echo "Hari Kamis";
        break;

    case "Friday":
        echo "Hari Jumat";
        break;

    default:
        echo "Hari tidak ditemukan.";
}


// ==========================
// TERNARY OPERATOR
// ==========================

$isLoggedIn = true;

echo "<h2>TERNARY</h2>";

$message = $isLoggedIn ? "Selamat datang!" : "Silakan login.";

echo $message;