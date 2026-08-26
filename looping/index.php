<?php

// ==========================
// FOR LOOP
// ==========================

echo "<h2>FOR LOOP</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i<br>";
}


// ==========================
// WHILE LOOP
// ==========================

echo "<h2>WHILE LOOP</h2>";

$i = 1;

while ($i <= 5) {
    echo "Perulangan ke-$i<br>";
    $i++;
}


// ==========================
// DO WHILE LOOP
// ==========================

echo "<h2>DO WHILE LOOP</h2>";

$i = 1;

do {
    echo "Perulangan ke-$i<br>";
    $i++;
} while ($i <= 5);


// ==========================
// FOREACH
// ==========================

echo "<h2>FOREACH</h2>";

$fruits = [
    "Apple",
    "Banana",
    "Orange",
    "Mango"
];

foreach ($fruits as $fruit) {
    echo "Buah: $fruit<br>";
}


// ==========================
// FOREACH ASSOCIATIVE ARRAY
// ==========================

echo "<h2>FOREACH ASSOCIATIVE ARRAY</h2>";

$student = [
    "name" => "Faletehan",
    "age" => 17,
    "major" => "Software Engineering"
];

foreach ($student as $key => $value) {
    echo ucfirst($key) . ": $value<br>";
}


// ==========================
// BREAK
// ==========================

echo "<h2>BREAK</h2>";

for ($i = 1; $i <= 10; $i++) {
    if ($i === 6) {
        break;
    }

    echo "$i<br>";
}


// ==========================
// CONTINUE
// ==========================

echo "<h2>CONTINUE</h2>";

for ($i = 1; $i <= 5; $i++) {
    if ($i === 3) {
        continue;
    }

    echo "$i<br>";
}