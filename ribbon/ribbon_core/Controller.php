<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}

class Controller{

    function loadDatabase()
    {
        require 'ribbon/ribbon_core/Database.php';
        $connection = new Database();
        return $connection;
    }

    function model($model)
    {
        require_once 'ribbon/ribbon_models/' . $model . '.php';
        return new $model;
    }

    function loadHeader($template, $header=[])
    {
        require_once 'ribbon/ribbon_templates/header/' . $template . '.php';
    }

    function view($view, $data=[])
    {
        require_once 'ribbon/ribbon_views/' . $view . '.php';
    }

    function loadFooter($template, $footer=[])
    {
        require_once 'ribbon/ribbon_templates/footer/' . $template . '.php';
    }

    function sanitize($input)
    {
        if (is_array($input)) {
            foreach ($input as $key => $value) {
                $input[$key] = $this->sanitize($value);
            }
        } elseif (is_string($input)) {
            $input = trim($input);
            $input = strip_tags($input);
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        }
        return $input;
    }

   
}