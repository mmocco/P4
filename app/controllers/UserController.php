<?php

class UserController extends BaseController {


    public function __construct() {
        # Put anything here that should happen before any of the other actions
   
        $this->beforeFilter('csrf', array('on' => 'post'));

    }

    # This is an action...
    public function getSignup() {


    }

    # This is an action...
    public function postSignup() {


    }

    # This is an action...
    public function getLogin() {


    }

    # This is an action...
    public function postLogin() {


    }

}
