<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}

class Home extends Controller{

    public function index()
    {
        $header['title'] = 'RibbonPHP';
        $this->loadHeader('header', $header);
        $this->view('home/index');
        $this->loadFooter('footer');
    }

}