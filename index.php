<?php
    error_reporting(E_ALL); //Error/Exception engine, always use E_ALL

    ini_set('ignore_repeated_errors', TRUE);// Always use TRUE

    ini_set('display_errors',FALSE); //Error/Exception display, USE FALSE only in Production

    ini_set('log_errors', TRUE);//Error/Exception file logging Engine

    ini_set("error_log","/opt/lampp/htdocs/expenses-app/php-error.log");
    error_log("Beging Web App");

    require_once("libs/database.php");
    require_once("classes/error_messages.php");
    require_once("classes/success_messages.php");
    require_once("libs/controller.php");
    require_once("libs/model.php");
    require_once("libs/view.php");
    require_once("classes/sessionController.php");
    require_once("libs/app.php");

    require_once("config/config.php");

    
    $app = new App();
    