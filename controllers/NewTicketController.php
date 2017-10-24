<?php
/**
 * NewTicketController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";
include_once "models/MockStore.php";
include_once "services/ProductService.php";
include_once "models/Product.php";

class NewTicketController extends RestrictedController
{
    function default_action()
    {
        $products = ProductService::get_all();

        include "views/new_ticket.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['current_person']);
    }
}
