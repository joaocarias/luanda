<?php

$route[] = ['/','HomeController@index'];
$route[] = ['/site','HomeController@index'];
$route[] = ['/site/','HomeController@index'];
$route[] = ['/site/home','HomeController@index'];
$route[] = ['/site/home/','HomeController@index'];
$route[] = ['/site/contato/','ContatoController@index'];
$route[] = ['/admin/','HomeController@index'];
$route[] = ['/admin','HomeController@index'];

return $route;
