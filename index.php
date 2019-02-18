<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload
require_once('vendor/autoload.php');
require_once ('classes/');

//create an instance of the BASE CLASS
$f3 = Base::instance();

//turn on fat-free error reporting
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function(){
    $monster = new Monster("Frank");
    $monster->attack();
    $view = new View();//add parenthesis for consistency
    echo $view->render('views/home.html');
});

//run fat free framework
$f3->run();