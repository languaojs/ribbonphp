<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}

require 'ribbon_core/Session.php';
require 'ribbon_core/Config.php';
require 'ribbon_core/Path.php';
require 'ribbon_core/Controller.php';
require 'ribbon_core/Router.php';



