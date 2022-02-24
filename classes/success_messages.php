<?php

    class SuccessMessages{
        
        //SUCCESS_CONTROLLER_METHOD_ACTION
        const PRUEBA = "3f5a72b2cc74c42af0b8268866f43d02";
        
        private $successList = [];

        function __construct()
        {
            $this->successList = [

                SuccessMessages::PRUEBA => 'Éxito!'
            ]; 
        }

        public function get($hash){
            return $this->successList[$hash];
        }

        public function existsKey($key){
            if (array_key_exists($key,$this->successList)) {
                return true;
            }else{
                return false;
            }
        }
    }