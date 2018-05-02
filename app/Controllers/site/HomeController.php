<?php

namespace App\Controllers\site;

/**
 * Description of HomeController
 *
 * @author joao
 */
class HomeController {
    public function index(){
        include('../app/Views/site/index.phtml');
    }
}
