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
        $is_editing = isset($_POST['edit-btn']);

        $tickets = MockStore::get_all_by_type('tickets');
        $filter_options = MockStore::get_all_by_type('filter_options');
        $statuses = MockStore::get_all_by_type('statuses');

        $current_ticket = null;

        if (isset($_GET['ticket_id']))
            $current_ticket = MockStore::get_by_id('tickets', $_GET['ticket_id']);

        include "views/tickets.php";

//        $dd = array();
//        foreach(get_class_vars($this) as $var ):
//           array_push($dd, $var);
//        endforeach;
//
//        render$dd);
    }

    function is_valid_user()
    {
        return isset($_SESSION['person_type']);
    }

}
