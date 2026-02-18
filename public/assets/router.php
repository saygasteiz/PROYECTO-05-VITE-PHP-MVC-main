<?php

// Router for PHP built-in server to mimic Apache rewrites.
// Serve static files directly, route everything else to index.php.

if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $file = __DIR__ . $path;

    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/index.php';
