<?php
session_start(); 

$_SESSION['visited_pages'][] = $_SERVER['REQUEST_URI'];

echo "<h2>Список посещенных страниц:</h2>";
echo "<ul>";
foreach ($_SESSION['visited_pages'] as $page) {
    echo "<li><a href='$page'>$page</a></li>";
}
echo "</ul>";
