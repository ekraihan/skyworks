<?php
/**
 * HeaderController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/Controller.php";

class HeaderController extends Controller {
     public function default_action()
     {
         // TODO: Implement default_action() method.
     }

     public function logout()
     {
         if (!isset($_SESSION['current_person']))
             header("Location: index.php?method=login");

         $current_role = $_SESSION['current_person']->Role;
         unset($_SESSION['current_person']);
         if ($current_role === Roles::ADMIN)
             header("Location: admin_login");
         else if ($current_role === Roles::AGENT)
             header("Location: agent_login");
         else if ($current_role === Roles::USER)
             header("Location: index.php?method=login");
     }
}