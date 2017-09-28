<?php
/**
 * EditController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";
include_once "models/MockStore.php";

class EditController extends RestrictedController {
    public function default_action()
    {
        $is_editing = isset($_POST['edit-btn']);

        $is_adding_user = isset($_POST['add-usr-btn']);

        $users = MockStore::get_all_by_type('users');
        $filter_options = MockStore::get_all_by_type('filter_options');

        $current_user = null;
        $current_user_id = null;

        if (isset($_GET['user_id']))
        {
            $current_user_id = $_GET['user_id'];
            $current_user = MockStore::get_by_id('users', $current_user_id);
        }


        include "views/edit.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['person_type']);
    }
}