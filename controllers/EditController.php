<?php
/**
 * EditController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";

class EditController extends RestrictedController {
    public function default_action()
    {
        include "views/edit.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['current_superadmin']);
    }
}