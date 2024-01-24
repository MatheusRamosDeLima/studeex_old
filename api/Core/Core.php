<?php

class Core {
    private null|string|array $uri;
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

    private function run() {
        $this->uri = $this->defineURI($this->uri);

        print_r($this->uri);

        $controllerMethodParams = $this->configControllerMethodParams($this->uri);
        $this->controller = $controllerMethodParams['controller'];
        $this->method = $controllerMethodParams['method'];
        $this->paramethers = $controllerMethodParams['paramethers'];

        echo "<h1>Teste do resultado do método <em>configControllerMethodParams()</em></h1>";
        echo "<p>Controller: {$this->controller}</p>";
        echo "<p>Método: {$this->method}</p>";
        if (!empty($this->paramethers)) {
            echo "<p>Paramethers:</p>";
            foreach ($this->paramethers as $i => $p) {
                echo "<p>P$i: $p</p>";
            }
        }

        $callController = new $this->controller;
        call_user_func_array(array($callController, $this->method), $this->paramethers);
    }

    private function defineURI($uri):array {
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
}