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

include_once "services/AgentService.php";

echo "<h3>########## Testing Ticket Service ##########</h3>";

function test_save() {
    echo "Testing Save <br><br>";
    $ticket = new Ticket();
    $ticket->set_product_id(1)
        ->set_user_id(3);

    $ticket = TicketService::save($ticket);
    print_r($ticket);

    $message = new Message();
    $message->set_user_id($ticket->UserId)
        ->set_agent_id($ticket->AgentId)
        ->set_ticket_id($ticket->TicketId)
        ->set_message("I'm Here to asssist with blah")
        ->set_is_agent_reply(true);

    MessageService::save($message);

    echo "<br><br>";
}

function test_get_by_id() {
    echo "Test Get By Id <br><br>";
    print_r(TicketService::get_by_id(46));

    echo "<br><br>";
}

function test_get_all() {
    echo "Test Get All <br><br>";
    foreach(TicketService::get_all() as $ticket) {
        print_r($ticket);
        echo  "<br><br>";
    }
}

function test_update() {
    echo "Test Update <br><br>";
    $ticket = TicketService::get_by_id(98);
    print_r($ticket);
    echo "<br><br>";
    $ticket->set_status(4)
    ->set_rating(9.323332);
    print_r(TicketService::save($ticket));
}

function update_agent_rating() {
    AgentService::update_rating(4, 5);
}

//test_save();
//test_get_by_id();
//test_get_all();
//test_update();
update_agent_rating();