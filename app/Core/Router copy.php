<?php



class Router{

    protected $routes = [];

    public function get($uri, $controller){

        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }
    
    public function post($uri, $controller){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }
    
    public function patch($uri, $controller){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }
    
    public function put($uri, $controller){

        $this->routes[] = [
        'uri' => $uri,
        'controller' => $controller,
        'method' => 'PUT'
       ];
    }

    public function route($uri, $method){
        foreach($this->routes as $route){
            if($route['uri']===$uri && $route['method'] === strtoupper($method)){
                return require ($route['controller']);
            }
        }
    }

    protected function abort($code=404){
        http_response_code($code);
        require "views/{$code}.php";
        die();
    }
    
}