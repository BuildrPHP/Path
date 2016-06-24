<?php

$autoloadFile = __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

if(!file_exists($autoloadFile)) {
    echo 'The dependencies not installed! (Auto-load file not found!)';
    exit(1);
}

define('BUILDR_TEST_PROJECT_ROOT', __DIR__);

include_once $autoloadFile;
