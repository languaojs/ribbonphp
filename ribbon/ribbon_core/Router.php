<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP:/1.0 403 Forbidden', TRUE, 403);
    die("<h2>Access Denied</h2> <p>This file is protected!</p>");
}

class Router
{

    protected $controller = 'home';
    protected $method = 'index';
    protected $parameters = [];

    function __construct()
    {
        $url = $this->parseUrl();
        if (!empty($url[0])) {
            if (file_exists('ribbon/ribbon_controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }else{
                // throw new Exception("Controller not found", 1);
                $this->notFound();
                exit;
            }
        }

        require_once 'ribbon/ribbon_controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                // throw new Exception("Method not found", 1);
                $this->notFound();
                exit;
            }
        }

        if (!empty($url)) {
            $this->parameters = array_values($url);
        }

        call_user_func_array(
            [
                $this->controller,
                $this->method
            ],
            $this->parameters
        );
    }

    function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

    function notFound()
    {
        $this->controller = 'notfound';
        require_once 'ribbon/ribbon_controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        call_user_func_array(
            [
                $this->controller,
                $this->method
            ],
            $this->parameters
        );
    }
}

$app = new Router;
