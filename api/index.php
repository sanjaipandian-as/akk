<?php
// If run via PHP built-in server, serve static files directly
if (php_sapi_name() === 'cli-server') {
    $filePath = $_SERVER["SCRIPT_FILENAME"];
    if (is_file($filePath) && substr($filePath, -4) !== '.php') {
        return false;
    }
}

// Set the working directory to the project root so all relative includes work
$rootDir = dirname(__DIR__);
chdir($rootDir);

// Get the request URI path
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// Clean up slash prefixes/suffixes
$path = trim($path, '/');

// If empty path, default to index.php
if ($path === '') {
    require $rootDir . '/index.php';
    exit;
}

// If the path ends with .php, we use it directly; otherwise we append .php
if (substr($path, -4) === '.php') {
    $file = $path;
} else {
    $file = $path . '.php';
}

// Prevent infinite loop by not allowing routing to the api folder
if (substr($file, 0, 4) === 'api/') {
    echo "404 Not Found";
    exit;
}

// Check if the file exists in the root directory
$absoluteFile = $rootDir . '/' . $file;
if (file_exists($absoluteFile)) {
    require $absoluteFile;
    exit;
}

// Fallback to index.php or 404
$absoluteIndex = $rootDir . '/index.php';
if (file_exists($absoluteIndex)) {
    require $absoluteIndex;
    exit;
}

echo "404 Not Found";
