<?php
/**
 * ticket_service_test.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/14/17
 */

include_once "services/TicketService.php";
include_once "models/Ticket.php";
include_once "services/MessageService.php";
include_once "models/Message.php";

echo "<h3>########## Testing Ticket Service ##########</h3>";

function test_save() {
    echo "Testing Save <br><br>";
    $ticket = new Ticket();
    $ticket->set_product_id(1)
        ->set_user_id(3);

    echo "<br><br>";
}

function test_get_by_id() {
    echo "Test Get By Id <br><br>";
    print_r(TicketService::get_by_id(46));

    echo "<br><br>";
}


test_save();
test_get_by_id();
