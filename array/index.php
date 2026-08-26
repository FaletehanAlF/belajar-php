<?php

// ==========================
// INDEXED ARRAY
// ==========================

echo "<h2>INDEXED ARRAY</h2>";

$fruits = [
    "Apple",
    "Banana",
    "Orange",
    "Mango"
];

echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[2] . "<br>";


// ==========================
// MENAMBAHKAN DATA
// ==========================

echo "<h2>ADD DATA</h2>";

$fruits[] = "Grape";

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}


// ==========================
// ASSOCIATIVE ARRAY
// ==========================

echo "<h2>ASSOCIATIVE ARRAY</h2>";

$user = [
    "name" => "Faletehan",
    "age" => 17,
    "major" => "Software Engineering"
];

echo "Name: " . $user["name"] . "<br>";
echo "Age: " . $user["age"] . "<br>";
echo "Major: " . $user["major"] . "<br>";


// ==========================
// FOREACH ASSOCIATIVE ARRAY
// ==========================

echo "<h2>FOREACH ASSOCIATIVE ARRAY</h2>";

foreach ($user as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}


// ==========================
// MULTIDIMENSIONAL ARRAY
// ==========================

echo "<h2>MULTIDIMENSIONAL ARRAY</h2>";

$students = [
    [
        "name" => "Faletehan",
        "age" => 17,
        "major" => "Software Engineering"
    ],
    [
        "name" => "Andi",
        "age" => 18,
        "major" => "Computer Network"
    ],
    [
        "name" => "Budi",
        "age" => 17,
        "major" => "Software Engineering"
    ]
];

foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Major: " . $student["major"] . "<br>";
    echo "<hr>";
}


// ==========================
// COUNT ARRAY
// ==========================

echo "<h2>COUNT</h2>";

echo "Jumlah buah: " . count($fruits);


// ==========================
// ARRAY SEARCH
// ==========================

echo "<h2>ARRAY SEARCH</h2>";

$search = "Banana";

if (in_array($search, $fruits)) {
    echo $search . " ditemukan.";
} else {
    echo $search . " tidak ditemukan.";
}