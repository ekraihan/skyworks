<?php
/**
 * PersonInfoControllerer.php.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";

class PersonInfoController extends RestrictedController
{
    public function default_action()
    {
        include "views/person_info.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['person_type']);
    }
}