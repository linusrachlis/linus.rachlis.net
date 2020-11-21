<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/config.php';

use ScssPhp\ScssPhp\Compiler;

$request_uri = $_SERVER['REQUEST_URI'];

if (substr($_SERVER['REQUEST_URI'], -1) == '/') {
    $request_uri .= 'index.html';
}

foreach ($pages as $page) {
    if ($request_uri == "/$page.html") {
        require "$src_dir/_inc.php";
        require "$src_dir/$page.php";
        exit;
    }
}

if ($request_uri == '/style.css') {
    header('Content-type: text/css');
    foreach ($css_files as $css_file) {
        readfile("$src_dir/styles/$css_file.css");
        echo PHP_EOL;
    }

    $scss = new Compiler();
    foreach ($scss_files as $scss_file) {
        $scss_code = file_get_contents("$src_dir/styles/$scss_file.scss");
        echo $scss->compile($scss_code) . PHP_EOL;
    }

    exit;
}

// If I end up serving other static assets, you can apparently return
// false to serve the file as-is.

header('HTTP/1.1 404 File Not Found');
