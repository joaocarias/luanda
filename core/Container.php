<?php

namespace Core;

/**
 * Description of Container
 *
 * @author joao
 */
class Container {
    public static function newController($area, $controller){
        $controller = "App\\Controllers\\{$area}\\" . $controller;
        
        return new $controller;
    }   
}
