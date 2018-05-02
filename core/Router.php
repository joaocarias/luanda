<?php

namespace Core;

/**
 * Description of Router
 *
 * @author joao
 */
class Router {
    private $routes;
    private $url;
    private $area;
    private $explode;
    private $routerOnRaiz = 'site';
    
    public function __construct(array $routes) {
        $this->setRoutes($routes);
        $this->run();
    }
    
    private function setExplode(){
        $this->explode = explode("/", $this->url);
    }
    
    private function setUrl(){
        $this->url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
    
    private function setRoutes($routes){
        foreach ($routes as $route){
            $explode = explode("@", $route[1]);
            $r = [$route[0], $explode[0], $explode[1]];            
            $newRoutes[] = $r;
        }
        $this->routes = $newRoutes;
    }

    private function getUrl(){
        return $this->url;
    }
    
    private function setArea(){
        $this->area = $this->explode[1] == "" ? $this->routerOnRaiz : $this->explode[1];
       
    }       
    
    private function run(){
        
        $param = array();
        
        $this->setUrl();
        $this->setExplode();
        $this->setArea();
    //    var_dump($this->area);
                
        foreach ($this->routes as $route){
            $routeArray = explode("/", $route[0]);
                        
            for($i = 0; $i < count($routeArray); $i++){
                if((strpos($routeArray[$i], "{") !== false) && (count($this->explode) == count($routeArray)) ){
                    $routeArray[$i] = $this->explode[$i];
                    $param[] = $this->explode[$i];
                }                
                $route[0] = implode($routeArray, "/");
            }
            
            if($this->url == $route[0]){
                $found = true;
                $controller = $route[1];
                $action = $route[2];                
                break;
            }
        }
        
        if($found){
            $controller = Container::newController($this->area, $controller);
            
            switch (count($param)){
                case 1:
                    $controller->$action($param[0]);
                    break;
                case 2:
                    $controller->$action($param[1], $param[2]);
                    break;
                case 3:
                    $controller->$action($param[1], $param[2], $param[3]);
                    break;
                default :
                    $controller->$action();
                    break;                    
            }
        }
    }    
}
