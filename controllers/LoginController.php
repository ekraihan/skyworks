<?php
/**
 * LoginController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "controllers/Controller.php";
include_once "models/User.php";

class LoginController extends Controller {

    function default_action()
    {
        if (isset($_POST['user_login']))
        {
            $_SESSION['person_type'] = 'user';
            header("Location: index.php?module=ticket");
        }
        else if (isset($_POST['agent_login']))
        {
            $_SESSION['person_type'] = 'agent';
            header("Location: index.php?module=ticket");
        }
        else if (isset($_POST['admin_login']))
        {
            $_SESSION['person_type'] = 'admin';
            header("Location: index.php?module=report");
        }
        else if (isset($_POST['super_admin_login']))
        {
            $_SESSION['person_type'] = 'super_admin';
            header("Location: index.php?module=report");
        }

        include "views/login.php";
    }
}