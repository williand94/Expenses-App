<?php

    class Controller{

        function __construct()
        {
            $this->view = new View();
        }
    
        function loadModel($model)
        {
            $url = 'models/' .$model. 'Model.php';
            if(file_exists($model))
            {
                require_once $url;
                
                $modelName = $model.'Model';
                $this->model = new $modelName();
            }
        }
    }


