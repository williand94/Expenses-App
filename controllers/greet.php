<?php

    class Greet extends Controller
    {
        function __construct()
        {
            parent::__construct();
            error_log('GreetController::construct ->"Bging');
        }

        function render()
        {
            $this->view->render("login/index");
        }
    }