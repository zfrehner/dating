<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);



//require auto load file
require_once("vendor/autoload.php");
require_once("model/data-layer.php");
//require_once("model/validation.php");
//require_once ("classes/Member.php");
//require_once("classes/PremiumMember.php");

session_start();

//instantiate f3 base class (create an instance of the base class)
$f3 = Base::instance();

$validator = new Validation();
$controller = new Controller($f3, $validator);

//define a default root (what the user sees when they go to index page)
$f3->route('GET /', function() {

    $GLOBALS['controller']->home();

});

$f3-> route('GET|POST /personalInfo', function() {

    $GLOBALS['controller']->personalInfo();

});

$f3-> route('GET|POST /profile', function() {

    $GLOBALS['controller']->profile();

});

//sign up route
$f3->route('GET|POST /interests', function() {

    $GLOBALS['controller']->interests();

});

$f3->route('GET /summary', function(){

    $GLOBALS['controller']->summary();
});

//run fat free
$f3->run();