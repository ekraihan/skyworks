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
        $is_editing = isset($_POST['edit-btn']);
        include "views/person_info.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['current_person']);
        // AND is the person who's profile you are requesting the same as the current user logged in
    }
}