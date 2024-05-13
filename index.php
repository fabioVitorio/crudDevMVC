<?php

    require_once './vendor/autoload.php';
    require_once './App/Core/Core.php';
    require_once './App/Controller/LoginController.php';
    require_once './App/Controller/UserController.php';
    require_once './App/Model/Usuario.php';
    require_once './App/Config/Connection.php';

    session_start();

    $core = new Core();
    $core->start($_GET);

?>