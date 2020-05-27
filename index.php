<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

//require auto load file
require_once("vendor/autoload.php");
require_once("model/data-layer.php");
require_once("model/validation.php");

//instantiate f3 base class (create an instance of the base class)
$f3 = Base::instance();

//define a default root (what the user sees when they go to index page)
$f3->route('GET /', function() {

    $view = new Template();
    echo $view->render('views/home.php');

});

$f3-> route('GET|POST /personalInfo', function($f3) {

    //$_SESSION = array();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //var_dump($_POST);
        //Store the data in the session array
        $_SESSION['firstName'] = $_POST['firstName'];
        $_SESSION['lastName'] = $_POST['lastName'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['phone'] = $_POST['phone'];

        $f3->reroute('/profile');
    }
    //$f3->set('gender', $gender);
    $view = new Template();
    echo $view->render('views/personalInfo.php');


});

$f3-> route('GET|POST /profile', function($f3) {

   // $_SESSION = array();
    $states = getStates();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //var_dump($_POST);
        //Store the data in the session array
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['states'] = $_POST['states'];
        $_SESSION['seeking'] = $_POST['seeking'];
        $_SESSION['biography'] = $_POST['biography'];

        $f3->reroute('/interests');
    }
    $f3->set('states', $states);
    $view = new Template();
    echo $view->render('views/profile.php');
});

//sign up route
$f3->route('GET|POST /interests', function($f3) {
    //$_SESSION = array();

    $indoor = getIndoor();
    $outdoor = getOutdoor();
    //If the form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Store the data in the session array
        $_SESSION['indoor'] = $_POST['indoor'];
        $_SESSION['outdoor'] = $_POST['outdoor'];

        //Redirect to summary page
        $f3->reroute('summary');
    }

    $f3->set('indoor', $indoor);
    $f3->set('outdoor', $outdoor);

    $view = new Template();
    echo $view->render('views/interests.php');

});

$f3->route('GET /summary', function(){

    $view = new Template();
    echo $view->render('views/summary.php');
    session_destroy();
});

//run fat free
$f3->run();