<?php

    class Errors extends Controller{

        function __construct()
        {
            parent::__construct();
            error_log('Errors::construct -> Begin Errors');
        }

        function render()
        {
            error_log('Errors::construct -> Begin Errors');
            $this->view->render("errors/index");
        } 
    }