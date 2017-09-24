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
         unset($_SESSION['person_type']);
         header("Location: index.php?module=login");
     }
}