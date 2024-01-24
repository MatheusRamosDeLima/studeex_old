<?php

class Core {
    private ?array $uri;
    private ?string $controller;
    private ?string $method;
    private ?array $paramethers;

    public function __construct() {
        $this->uri = null;
        $this->controller = null;
        $this->method = null;
        $this->paramethers = null;
        $this->run();
    }
    public function getUri():?array { return $this->uri; }
    public function setUri(?array $uri) { $this->uri = $uri; }
    public function getController():?string { return $this->controller; }
    public function setController(?string $controller) { $this->controller = $controller; }
    public function getMethod():?string { return $this->method; }
    public function setMethod(?string $method) { $this->method = $method; }
    public function getParamethers():?array { return $this->paramethers; }
    public function setParamethers(?array $paramethers) { $this->paramethers = $paramethers; }

    private function run() {
        $this->uri = $this->defineURI();

        $controllerMethodParams = $this->configControllerMethodParams($this->getUri());
        $this->controller = $controllerMethodParams['controller'];
        $this->method = $controllerMethodParams['method'];
        $this->paramethers = $controllerMethodParams['paramethers'];

        $this->callMethodOfController($this->getController(), $this->getMethod(), $this->getParamethers());
    }

    private function defineURI():array {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        if ($uri === 'index.php') $uri = '';
        else if (strpos($uri, "index.php/") === 0) $uri = substr($uri, strlen("index.php/"));
        $uri = explode('/', $uri);

        return $uri;
    }
    private function configControllerMethodParams($uri) {
        if (!empty($uri[0])) {
            $controller = ucfirst(strtolower($uri[0])).'Controller';
            array_shift($uri);
            if (!empty($uri[0])) {
                $method = strtolower($uri[0]);
                array_shift($uri);
                if (count($uri) > 0) $paramethers = $uri;
                else $paramethers = [];
            } else {
                $method = 'index';
                $paramethers = [];
            }
        } else {
            $controller = 'HomeController';
            $method = 'index';
            $paramethers = [];
        }

        $controllerPath = $_SERVER['DOCUMENT_ROOT']."/api/Controllers/$controller.php";
        if (!file_exists($controllerPath) || !method_exists($controller, $method) || method_exists('Controller', $method)) {
            $controller = 'ErrorController';
            $method = 'index';
            $paramethers = [];
        }

        return ['controller' => $controller, 'method' => $method, 'paramethers' => $paramethers];
    }
    private function callMethodOfController(string $controller, string $method, array $paramethers) {
        $callController = new $controller;
        call_user_func_array(array($callController, $method), $paramethers);
    }
}