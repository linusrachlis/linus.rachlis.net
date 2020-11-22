<?php

$src_dir = __DIR__ . '/../src';

$pages = [
    'index',
];

$essays = glob($src_dir . '/essays/*', GLOB_ONLYDIR);
foreach ($essays as $essay_dir) {
    $pages[] = substr($essay_dir, strlen($src_dir) + 1) . '/index';
}

$css_files = [
    'normalize',
    'main',
];
$scss_files = [
    'custom',
];
