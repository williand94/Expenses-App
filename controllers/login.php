<?php

    class Login extends Controller{

        function __construct()
        {
            parent::__construct();
            error_log('Login::construct -> Loging Begin');
        }

        function render()
        {
            error_log('Login::construct -> Loging Render');

            $this->view->render("login/index");
        }
    }