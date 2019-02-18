<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload
require_once('vendor/autoload.php');

//create an instance of the BASE CLASS
$f3 = Base::instance();

//turn on fat-free error reporting
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET|POST /', function(){
    $monster = new Monster("Frank");
    $monster->attack();
    echo '<p>'.$monster-getName().'</p>';

    $vampire = new Vampire("Frank Jr");
    $vampire->attack();
    echo "<p>" . $vampire->getVictims() . "</p>";

    $godzilla= new Godzilla("Lily");
    $godzilla->attack();
    echo "<p>" . $godzilla->getVictims() . "</p>";

    $template = new Template();//add parenthesis for consistency
    echo $template->render('views/home.html');
});

//run fat free framework
$f3->run();