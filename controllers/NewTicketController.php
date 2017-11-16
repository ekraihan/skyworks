<?php
/**
 * NewTicketController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";
include_once "services/ProductService.php";
include_once "models/Product.php";
include_once "services/MessageService.php";
include_once "models/Message.php";
include_once "services/TicketService.php";
include_once "models/Ticket.php";

class NewTicketController extends RestrictedController
{
    function default_action()
    {
        $products = ProductService::get_all();

        $ticket_valid = true;

        if (isset($_POST['submit']))
        {
            $ticket_valid = isset($_POST['product'])
                && isset($_POST['ticket-text'])
                && $_POST['ticket-text'] !== "";

            if ($ticket_valid)
            {
                $ticket = new Ticket();
                $ticket->set_user_id($_SESSION['current_person']->PersonId)
                    ->set_product_id($_POST['product']);

                $ticket = TicketService::save($ticket);

                $message = new Message();
                $message->set_user_id($ticket->UserId)
                    ->set_agent_id($ticket->AgentId)
                    ->set_ticket_id($ticket->TicketId)
                    ->set_message($_POST['ticket-text'])
                    ->set_is_agent_reply(false);

                MessageService::save($message);

                header("Location: index.php?module=ticket");
            }
        }

        include "views/new_ticket.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['current_person']) && $_SESSION['current_person']->Role == Roles::USER;
    }
}
