<?php

require_once("controllers/errors.php");

class App{

    function __construct()
    {
        $url = isset($_GET['url']) ?  $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //If the url  in its 0 position is empty, the user will be redirected to login
        if (empty($url[0])) {
            error_log("App::construct-> There is not controller especificed!");
            $fileController = "controllers/login.php";
            require_once($fileController);
            $controller = new Login();
            $controller->loadModel('login');
            $controller->render();
            return false;
        }

        // If the url  in its 0 position isn't empty,it then brings a controller.
        //we're gonna require that controller
        $fileController = "controllers/" . $url[0] . ".php";

        //We're gonna validate if file exists.
        if (file_exists($fileController)) {
            require_once($fileController);
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            //We're gonna check if controller brings a method
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    if (isset($url[2])) {
                        //we're gonna check the amount params that the url Brings
                        $nParams = count($url) - 2;
                        //array's params
                        $param = [];

                        for ($i = 0; $i < $nParams; $i++) {
                            array_push($param, $url[$i] + 2);
                        }

                        $controller->{$url[1]}($param);
                    } else {
                        //If the Method doesn't has params, it'll be call the method normally
                        $controller->{$url[1]}();
                    }
                } else {
                    //If method not exist
                    $controller = new Errors();
                    $controller->render();

                    error_log("App::construct-> Errors render!");
                    
                }
            } else {
                //If controller  isn't brings a method,we'll upload a default method
                $controller->render();
            }
        } else {
            $controller = new Errors();
            $controller->render();

            error_log("App::construct-> Errors render!2");

        }
    }
}
