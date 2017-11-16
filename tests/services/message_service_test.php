<?php
/**
 * message_service_test.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */

include_once "services/MessageService.php";
include_once "models/Message.php";

function test_add() {
    $message = new Message();
    $message->set_user_id(3)
        ->set_agent_id(4)
        ->set_ticket_id(46)
        ->set_message("HELP MEEEEE")
        ->set_is_agent_reply(false);

    MessageService::save($message);

    $message = new Message();
    $message->set_user_id(3)
        ->set_agent_id(4)
        ->set_ticket_id(46)
        ->set_message("I'm Here to asssist")
        ->set_is_agent_reply(true);

    MessageService::save($message);
}

test_add();