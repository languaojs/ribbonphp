<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}

define('LIBS_DIR', 'ribbon/ribbon_libs');
define('JS_DIR', APP_ROOT . '/public/assets/js');
define('CSS_DIR', APP_ROOT . '/public/assets/css');
define('IMG_DIR', APP_ROOT . '/public/assets/img');