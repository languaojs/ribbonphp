<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}

require_once 'ribbon_core/Session.php';
require_once 'ribbon_core/Config.php';
require_once 'ribbon_core/Path.php';
require_once 'ribbon_core/Database.php';
require_once 'ribbon_core/Controller.php';
require_once 'ribbon_core/Router.php';



