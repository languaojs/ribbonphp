<?php 

// DO NOT REMOVE THIS CONTROLLER!

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}

class Ribbon extends Controller{

    public function index(){
        return false;
    }

    public function assets($path){
        if($path == 0){
            return false;
        }else{
            if(!file_exists($path)){
                return false;
            }else{
                return $path;
            }
        }
    }
}