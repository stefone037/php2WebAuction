<?php


namespace App\Core;
use App\Core\Route;
class Router {
  private $routes = [];



  public function add(Route &$route) {
      $this->routes[] = $route;
  }


  public function find(string $url, string $requestedMethod) {


    foreach($this->routes as $route) {

      if($route->matches($url, $requestedMethod)) {
        return $route;
      }

     
    }
  }
}