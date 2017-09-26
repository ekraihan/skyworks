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

include "templates/header.php";

$module = ((isset($_GET['module']) && $_GET['module'] !== "") ? $_GET['module'] : 'login').'Controller';
$action = isset($_GET['action']) ? $_GET['action'] : '';

$controller = new $module();
$controller->run($action);


include "templates/footer.php";

