<?php 


namespace App\Core;

class Route {

    private $pattern;
    private $controller;
    private $requestedMethod;
    private $method;


    public function __construct(string $pattern, string $controller, string $requestedMethod, string $method)
    {
      $this->pattern = $pattern;
      $this->controller = $controller;
      $this->requestedMethod = $requestedMethod;
      $this->method = $method;
    }


    public static function get($pattern, $controller, $method): Route {
      return new Route($pattern, $controller, "GET", $method);
    }

    public static function post($pattern, $controller, $method): Route {
      return new Route($pattern, $controller, "POST", $method);
    }

    public static function any($pattern, $controller, $method): Route {
      return new Route($pattern, $controller, "GET|POST", $method);
    }
    
    public function matches($url, $requestedMethod) {
      if(!preg_match('|^'.$requestedMethod.'$|', $this->requestedMethod)) {
        return false;
      }
      return boolval(preg_match($this->pattern, $url));
    }


    public function getControllerName() {
      return $this->controller;
    }

    public function getMethodName() {
      return $this->method;
    }


    public function extractArguments($url) {
      $matches = [];
    
      preg_match_all($this->pattern, $url, $matches, PREG_PATTERN_ORDER);     
     

      if(isset($matches['match'])) {
        return $matches['match'];
      }
    }


}