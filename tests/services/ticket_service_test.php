<?php
/**
 * ticket_service_test.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/14/17
 */

include_once "services/TicketService.php";
include_once "models/Ticket.php";

function test_save() {
    $ticket = new Ticket();
    $ticket->set_product_id(1)
        ->set_user_id(3);
    print_r($ticket);
    TicketService::save($ticket);
}

echo "Testing Save";
test_save();