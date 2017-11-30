<?php
/**
 * TicketController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/18/17
 */

include_once "controllers/RestrictedController.php";
include_once "services/TicketService.php";
include_once "services/StatusService.php";
include_once "services/MessageService.php";
include_once "services/UserService.php";
include_once "models/MockStore.php";

class TicketController extends RestrictedController
{

    function default_action()
    {
        $is_editing = isset($_POST['edit-btn']);

        $statuses = StatusService::get_all();

        $current_ticket = null;

        if (isset($_GET['ticket_id']))
        {
            $current_ticket = TicketService::get_by_id($_GET['ticket_id']);
            $current_messages = MessageService::get_all_by_ticket_id($current_ticket->TicketId);
        }

        if (isset($_POST['submit-rating'])) {
            if (!is_numeric($_POST['ticket-rating']) || !($_POST['ticket-rating'] <= 10 && $_POST['ticket-rating'] >=0 )) {
                    $ticket_rating_invalid = true;
            }


            if (!is_numeric($_POST['agent-rating']) || !($_POST['agent-rating'] <= 10 && $_POST['agent-rating'] >=0 )) {
                $agent_rating_invalid = true;
            }

            if (!isset($ticket_rating_invalid) && ! isset($ticket_rating_invalid)) {
                $current_ticket->set_rating($_POST['ticket-rating']);
                TicketService::save($current_ticket);

                AgentService::update_rating($current_ticket->AgentId, $_POST['agent-rating']);
            }

        }

        if (isset($_POST['save-edit'])) {
            $current_ticket->set_status($_POST['new_status']);
            TicketService::save($current_ticket);
        }

        $tickets = TicketService::get_all();

        if (isset($_POST['save-message']))
        {
            if ($_POST['new-message'] !== "")
            {
               MessageService::send_message($_POST['new-message'], $_GET['ticket_id']);
               $current_messages = MessageService::get_all_by_ticket_id($current_ticket->TicketId);
               header("Location: index.php?module=ticket&ticket_id=" . $current_ticket->TicketId);
            }
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
