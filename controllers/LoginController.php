<?php
/**
 * LoginController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "controllers/Controller.php";
include_once "models/User.php";
include_once "services/LoginService.php";
include_once "services/AdminService.php";
include_once "services/AgentService.php";

include_once "models/Roles.enum.php";

class LoginController extends Controller {

    function default_action()
    {
        if (isset($_SESSION['person_type']))
            //header("Location: index.php?module=ticket");

        if (isset($_POST['login']))
        {
            $_SESSION['person_type'] = Roles::USER;
            //header("Location: index.php?module=ticket");
        }

        include "views/user_login.php";
    }

    function login_admin()
    {
//        if (isset($_SESSION['person_type']) && ($_SESSION['person_type'] === Roles::ADMIN))
//            header("Location: index.php?module=report");

        $user_valid = true;

        if (isset($_POST['login']))
        {
            if (LoginService::login_admin($_POST['username'], $_POST['password'])) {
                $_SESSION['current_person'] = AdminService::get_admin_by_username($_POST['username']);
                header("Location: index.php?module=report");
            }
            else
            {
                $user_valid = false;
            }
        }

        include "views/admin_login.php";
    }

    function login_agent()
    {
//        if (isset($_SESSION['person_type']) && $_SESSION['person_type'] === Roles::AGENT)
//            header("Location: index.php?module=ticket");

        $user_valid = true;

        if (isset($_POST['login']))
        {
            if (LoginService::login_agent($_POST['username'], $_POST['password'])) {
                $_SESSION['current_person'] = AgentService::get_agent_by_username($_POST['username']);
                header("Location: index.php?module=ticket");
            }
            else
            {
                $user_valid = false;
            }
        }

        include "views/agent_login.php";
    }
}