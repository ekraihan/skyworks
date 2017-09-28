<?php
/**
 * index.php
 * User: eliaskraihanzel
 * Date: 9/17/17
 */

include_once "controllers/RegisterController.php";
include_once "controllers/PersonInfoController.php";
include_once "controllers/TicketController.php";
include_once "controllers/NewTicketController.php";
include_once "controllers/LoginController.php";
include_once "controllers/HeaderController.php";
include_once "controllers/PersonInfoController.php";
include_once "controllers/ReportController.php";
include_once "controllers/EditController.php";
include_once "models/Roles.enum.php";

session_start();

$action = isset($_GET['action']) ? $_GET['action'] : '';

if (isset($_GET['module']) && class_exists($_GET['module']."Controller") && $_GET['module'] !== 'login')
{

    include "templates/header.php";

    $controller = $_GET['module'] . 'Controller';
    $controller = new $controller();
    $controller->run($action);

    include "templates/footer.php";
}
else
{
    $controller = new LoginController();
    $controller->run($action);
}


