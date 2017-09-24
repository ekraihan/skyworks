<?php
/**
 * TicketController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/18/17
 */

include_once "controllers/RestrictedController.php";

class TicketController extends RestrictedController
{
    function default_action()
    {
        include "views/tickets.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['person_type']);
    }
}
