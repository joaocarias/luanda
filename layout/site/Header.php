<?php

namespace Layout\site;

class Header {
    private $title = "Dra. Luanda Almeida - Odontologia Intregada";
    private $description = "Veja no Terra as últimas notícias e as melhores coberturas ao vivo do Brasil e "
            . " do Mundo, Esportes, Diversão, Vida e Estilo, assista os melhores vídeos no TerraTV e ouça as "
            . " melhores músicas no Sonora";
    private $author = "João Carias de França";
    private $email = "joaocariasdefranca@gmail.com";
    private $keywords = "Luanda Almeida, Odontologia Integrada, Goianinha-RN, Dentista";
    private $robots = "index, follow";
    private $dentista = "Luanda Almeida";
    private $cidade = "Goianinha-RN";
    
    function __construct($title = null, $description = null , $author = null, $email = null , $keywords = null
            , $robots = null, $dentista = null, $cidade = null) {
        $this->title = is_null($title) ? $this->title : $title;
        $this->description = is_null($description) ? $this->description : $description;
        $this->author = is_null($author) ? $this->author : $author;
        $this->email = is_null($email) ? $this->email : $email;
        $this->keywords = is_null($keywords) ? $this->keywords : $keywords;
        $this->robots = is_null($robots) ? $this->robots : $robots;
        $this->dentista = is_null($dentista) ? $this->dentista : $dentista;
        $this->cidade = is_null($cidade) ? $this->cidade : $cidade;        
    }
    
    public function getHeader(){
        return '<!doctype html>
                <!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
                <!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
                <!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
                <!--[if (gt IE 9)|!(IE)]><!-->
                <html lang="en-gb" class="no-js">
                <!--<![endif]-->
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                    <!--[if lt IE 9]> 
                    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                    <![endif]-->
                    <title>'.$this->title.'</title>
                    <meta name="description" content="'.$this->description.'">
                    <meta name="author" content="'.$this->author.'">
                    <meta name="email" content="'.$this->email.'">
                    <meta name="keywords" content="'.$this->keywords.'">
                    <meta name="robots" content="'.$this->robots.'">
                    <meta name="cidade" content="'.$this->cidade.'">
                    <meta name="dentista" content="'.$this->dentista.'">
                    <!--[if lt IE 9]>
                        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                    <![endif]-->
                    <!--[if lte IE 8]>
                                <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
                        <![endif]-->
                    <link rel="stylesheet" href="css/bootstrap.min.css" />
                    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
                    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
                    <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
                    <!-- Owl Carousel Assets -->
                    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
                    <link rel="stylesheet" href="css/styles.css" />
                    <!-- Font Awesome -->
                    <link href="font/css/font-awesome.min.css" rel="stylesheet">
                </head>';
    }
}
