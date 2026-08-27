<?php

setcookie("username", "Faletehan", time() + 3600);

if (isset($_COOKIE["username"])) {
    echo "Username: " . $_COOKIE["username"];
} else {
    echo "Cookie belum tersedia. Refresh halaman.";
}
?>