<?php
/**
 * TicketController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/18/17
 */

include_once "controllers/RestrictedController.php";
include_once "models/MockStore.php";

class TicketController extends RestrictedController
{

    function default_action()
    {
        $tickets = MockStore::get_all_by_type('ticket');
        $filter_options = MockStore::get_all_by_type('filter_option');
        $current_ticket = "";

        if (isset($_GET['ticket_id']))
            $current_ticket = MockStore::get_by_id('ticket', $_GET['ticket_id']);

        include "views/tickets.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['person_type']);
    }
}
