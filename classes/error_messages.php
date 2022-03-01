<?php

    class ErrorMessages{

        //ERROR_CONTROLLER_METHOD_ACTION
        const PRUEBA = "3f5a72b2cc74c42af0b8268866f43d02";

        //this array will content all messagess error
        private $errorList = [];

        function __construct()
        {
            $this->errorList = [

                ErrorMessages::PRUEBA => 'Es un error!'
            ]; 
        }

        //Method to return the error position wihtin  error array
        public function get($hash){
            return $this->errorList[$hash];
        }

        public function existsKey($key){
            if (array_key_exists($key,$this->errorList)) {
                return true;
            }else{
                return false;
            }
        }
    }