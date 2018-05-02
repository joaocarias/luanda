<?php

namespace App\Controllers;

/**
 * Description of PostController
 *
 * @author joao
 */
class PostController {
    public function index(){
        echo "Post";
    }
    
    public function show($id){
        echo $id;
    }
}
