<?php
/**
 * NewTicketController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";

class NewTicketController extends RestrictedController
{
    function default_action()
    {
        include "views/new_ticket.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['person_type']);
    }
}
