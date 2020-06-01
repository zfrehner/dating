<?php

class Controller
{
    private $_f3;
    private $_validator;

    public function __construct($f3, $validator)
    {
        $this->_f3 = $f3;
        $this->_validator = $validator;
    }

    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.php');
    }

    public function personalInfo()
    {
        //$_SESSION = array();
        $gender = getGender();

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);
            //Store the data in the session array
            if(!$this->_validator->validName($_POST['firstName'])) {
                $this->_f3->set('errors["firstName"]', "Please enter a valid first name.");
            }
            if(!$this->_validator->validName($_POST['lastName'])) {
                $this->_f3->set('errors["lastName"]', "Please enter a valid last name.");
            }
            if(!$this->_validator->validAge($_POST['age'])) {
                $this->_f3->set('errors["age"]', "Please enter a valid age.");
            }
            if(!$this->_validator->validPhone($_POST['phone'])) {
                $this->_f3->set('errors["phone"]', "Please enter a valid phone number.");
            }

            if(empty($this->_f3->get('errors'))) {

                //firstName, lastName, age, gender, phone

                if(isset($_POST['premium'])) {

                    $member = new PremiumMember();
                }
                else {
                    $member = new Member();
                }

                $member->setFname($_POST['firstName']);
                $member->setLname($_POST['lastName']);
                $member->setAge($_POST['age']);
                $member->setGender($_POST['gender']);
                $member->setPhone($_POST['phone']);

                $_SESSION['member'] = $member;


                $this->_f3->reroute('/profile');
            }
        }

        $this->_f3->set('firstName', $_POST['firstName']);
        $this->_f3->set('lastName', $_POST['lastName']);
        $this->_f3->set('age', $_POST['age']);
        $this->_f3->set('gender', $gender);
        $this->_f3->set('phone', $_POST['phone']);

        $view = new Template();
        echo $view->render('views/personalInfo.php');
    }

    function profile()
    {
        // $_SESSION = array();
        $states = getStates();
        $seeking = getGender();

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(!$this->_validator->validEmail($_POST['email'])) {
                $this->_f3->set('errors["email"]', "Please enter a valid email.");
            }
            //var_dump($_POST);
            //Store the data in the session array

            if(empty($this->_f3->get('errors'))) {

                $_SESSION['member']->setEmail($_POST['email']);
                $_SESSION['member']->setState($_POST['states']);
                $_SESSION['member']->setSeeking($_POST['seeking']);
                $_SESSION['member']->setBio($_POST['biography']);

                //$_SESSION['member'] = $member;

                if($_SESSION['member'] instanceOf PremiumMember) {
                    $this->_f3->reroute('/interests');
                }
                else {
                    $this->_f3->reroute('/summary');
                }
            }
        }

        $this->_f3->set('email', $_POST['email']);
        $this->_f3->set('seeking', $_POST['seeking']);
        $this->_f3->set('selected', $_POST['state']);
        $this->_f3->set('states', $states);

        $view = new Template();
        echo $view->render('views/profile.php');
    }

    function interests()
    {
        $indoor = getIndoor();
        $outdoor = getOutdoor();
        //If the form has been submitted
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(!$this->_validator->validOutdoor($_POST['outdoor'])) {
                $this->_f3->set('errors["outdoor"]', "Please choose an outdoor activity.");
            }
            if(!$this->_validator->validIndoor($_POST['indoor'])) {
                $this->_f3->set('errors["indoor"]', "Please choose an indoor activity.");
            }

            if (empty($this->_f3->get('errors'))) {
                //Store the data in the session array
                $_SESSION['indoor'] = $_POST['indoor'];
                $_SESSION['outdoor'] = $_POST['outdoor'];

                //Redirect to summary page
                $this->_f3->reroute('summary');
            }
        }

        $this->_f3->set('selectedIndoor', $_POST['indoor']);
        $this->_f3->set('selectedOutdoor', $_POST['outdoor']);
        $this->_f3->set('indoor', $indoor);
        $this->_f3->set('outdoor', $outdoor);

        $view = new Template();
        echo $view->render('views/interests.php');
    }

    function  summary()
    {
        $view = new Template();
        echo $view->render('views/summary.php');
        session_destroy();
    }
}