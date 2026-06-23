<?php
// Main entry point
require_once 'includes/config.php';

$page = $_GET['page'] ?? 'home';
$allowed_pages = ['home', 'about', 'services', 'contact', '404','ourServices','synthetic_cinema','aura_Architecture','growth_alchemy','kinetic_studio','rebranding','seoServices','the_digital_hq','the_eco_system','the_hype_engine'];

if (!in_array($page, $allowed_pages, true) || !file_exists("$page.php")) {
    $page = '404';
}

// Home page is taken from theme index-2.html in pages/home.php
if ($page === 'home') {
    include 'home.php';
} else {
    include "$page.php";
}
