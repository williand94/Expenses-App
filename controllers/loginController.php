<?php

    class Login extends Controller{

        function __construct()
        {
            parent::__construct();
            error_log('Login::construct -> Loging Begin');
        }

        function render()
        {
            $this->view->render("login/index");
        }
    }