<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}

//root directory
define('APP_ROOT', 'http://localhost/ribbonphp');

//database information
define('DB_HOST','');
define('DB_USER','');
define('DB_PASS','');
define('DB_NAME','');

