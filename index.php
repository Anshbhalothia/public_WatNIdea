<?php
// Main entry point
require_once 'includes/config.php';

$page = $_GET['page'] ?? 'home';
$allowed_pages = ['home', 'about', 'services', 'contact', '404'];

if (!in_array($page, $allowed_pages, true) || !file_exists("$page.php")) {
    $page = '404';
}

// Home page is taken from theme index-2.html in pages/home.php
if ($page === 'home') {
    include 'home.php';
} else {
    include "$page.php";
}
