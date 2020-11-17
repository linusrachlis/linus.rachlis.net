<?php

require __DIR__ . '/config.php';

$dist_dir = __DIR__ . '/../dist';

if (!is_dir($dist_dir)) {
    mkdir($dist_dir);
}

require "$src_dir/_inc.php";

foreach ($pages as $page) {
    ob_start();
    require "$src_dir/$page.php";
    $output = ob_get_clean();
    $output_path = "$dist_dir/$page.html";
    $output_dir = dirname($output_path);
    if (!is_dir($output_dir)) {
        mkdir($output_dir, 0777, true); // recursive
    }
    file_put_contents($output_path, $output);
}

$css_code = '';
foreach ($css_files as $css_file) {
    $css_code .= file_get_contents("$src_dir/css/$css_file.css") . PHP_EOL;
}
file_put_contents("$dist_dir/style.css", $css_code);
