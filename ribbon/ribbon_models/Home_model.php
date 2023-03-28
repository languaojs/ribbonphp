<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}

class Home_model{


    function getTestClass(){
        
        require LIBS_DIR . '/test/TestClass.php';
        $newTestClass = new TestClass;
        $string = $newTestClass->getString();
        return $string;
    }
}