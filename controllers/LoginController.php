<?php
/**
 * LoginController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "controllers/Controller.php";
include_once "models/User.php";

//session_start();

class LoginController extends Controller {

    function default_action()
    {
        if (isset($_SESSION['person_type']))
            header("Location: index.php?module=ticket");

        if (isset($_POST['login']))
        {
            $_SESSION['person_type'] = Roles::USER;
            header("Location: index.php?module=ticket");
        }

        include "views/login.php";
    }

    function login_admin()
    {
        if (isset($_SESSION['person_type']) && ($_SESSION['person_type'] === Roles::ADMIN || $_SESSION['person_type'] === Roles::SUPER_ADMIN))
            header("Location: index.php?module=report");

        if (isset($_POST['login']))
        {
            $_SESSION['person_type'] = Roles::ADMIN;
            header("Location: index.php?module=report");
        }

        include "views/admin_login.php";
    }

    function login_agent()
    {
        if (isset($_SESSION['person_type']) && $_SESSION['person_type'] === Roles::AGENT)
            header("Location: index.php?module=ticket");

        if (isset($_POST['login']))
        {
            $_SESSION['person_type'] = Roles::AGENT;
            header("Location: index.php?module=ticket");
        }

        include "views/agent_login.php";
    }
}