<?php
// Set the working directory to the project root so all relative includes work
chdir(dirname(__DIR__));

// Get the request URI path
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// Clean up slash prefixes/suffixes
$path = trim($path, '/');

// If empty path, default to index.php
if ($path === '') {
    require 'index.php';
    exit;
}

// If the path ends with .php, we use it directly; otherwise we append .php
if (substr($path, -4) === '.php') {
    $file = $path;
} else {
    $file = $path . '.php';
}

// Check if the file exists in the root directory
if (file_exists($file)) {
    require $file;
    exit;
}

// Fallback to index.php or 404
if (file_exists('index.php')) {
    require 'index.php';
    exit;
}

echo "404 Not Found";
