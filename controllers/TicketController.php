<?php
/**
 * TicketController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/18/17
 */

include_once "controllers/RestrictedController.php";
include_once "services/TicketService.php";
include_once "services/StatusService.php";
include_once "models/MockStore.php";

class TicketController extends RestrictedController
{

    function default_action()
    {
        $is_editing = isset($_POST['edit-btn']);

        $tickets = TicketService::get_all();
        $statuses = StatusService::get_all();

        $current_ticket = null;

        if (isset($_GET['ticket_id']))
        {
            $current_ticket = TicketService::get_by_id($_GET['ticket_id']);
            $current_messages = MessageService::get_all_by_ticket_id($current_ticket->TicketId);
        }


        include "views/tickets.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['current_person']) &&
            ($_SESSION['current_person']->Role === Roles::AGENT
                || $_SESSION['current_person']->Role === Roles::ADMIN
                || $_SESSION['current_person']->Role === Roles::USER
            );
    }

}
