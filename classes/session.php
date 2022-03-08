<?php

    class Session{
        
        private $sessionName = 'user';

        public function __construct()
        {
            //Here we're validate if session exists.
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
        }

        //set current user
        public function setCurrentUser($user){
            $_SESSION[$this->sessionName] = $user;
        }

        //get current user
        public function getCurrentUser(){
            return $_SESSION[$this->sessionName];
        }

        public function closeSession(){
            session_unset();
            session_destroy();
        }

        public function exists(){
            return isset($_SESSION[$this->sessionName]);
        }

    }