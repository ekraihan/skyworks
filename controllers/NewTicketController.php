<?php
/**
 * NewTicketController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";
include_once "models/MockStore.php";

class NewTicketController extends RestrictedController
{
    function default_action()
    {
        $products = MockStore::get_all_by_type('products');
        include "views/new_ticket.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['person_type']);
    }
}
