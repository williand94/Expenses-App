<?php

class Controller
{

    function __construct()
    {
        $this->view = new View();
    }

    function loadModel($model)
    {
        $url = 'models/' . $model . 'Model.php';
        if (file_exists($model)) {
            require_once $url;

            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }

    function existPOST($params)
    {
        foreach ($params as $param) {
            if (!isset($_POST[$param])) {
                error_log('CONTROLLer::existPOST -> No existe el parámetro');
                return false;
            }
        }
        return true;
    }

    function existGET($params)
    {
        foreach ($params as $param) {
            if (!isset($_GET[$param])) {
                error_log('CONTROLLer::existGET -> No existe el parámetro');
                return false;
            }
        }
        return true;
    }

    function getGet($name){
        return $_GET[$name];
    }

    function getPOST($name){
        return $_POST[$name];
    }

    function redirect($route, $mesages){
        $data = [];
        $params = '';

        foreach($mesages as $key => $mesage){
            array_push($data, $key . '=' . $mesage);
        }

        $params = join('&',$data);

        if ($params != '') {
            $params = '?'. $params;
        }

        header('Location: ' . constant('URL') . $route . $params);

    }
}
