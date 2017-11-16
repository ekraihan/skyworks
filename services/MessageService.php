<?php
/**
 * MessageService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */

include_once "services/BaseService.php";
include_once "mappers/MessageMapper.php";
include_once "models/Message.php";
include_once "services/TicketService.php";
include_once "models/Ticket.php";

class MessageService implements BaseService {

    /**
     * This method is expected to implement both update and add logic
     *
     * @param $message
     * @return mixed
     */
    static function save($message)
    {
        if (isset($message->MessageId)) {
            echo "Editing Message";
        }
        else
        {
            MessageMapper::add($message);
        }
    }

    static function get_all_by_ticket_id($id) {
        return MessageMapper::get_all_by_ticket_id($id);
    }
    static function get_all()
    {
        // TODO: Implement get_all() method.
    }

    static function get_by_id($id)
    {
        // TODO: Implement get_by_id() method.
    }

    static function delete($model)
    {
        // TODO: Implement delete() method.
    }

    static function send_message($message_str, $ticket_id) {
        $ticket = TicketService::get_by_id($ticket_id);

        $message = new Message();
        $message->set_user_id($ticket->UserId)
            ->set_agent_id($ticket->AgentId)
            ->set_ticket_id($ticket->TicketId)
            ->set_message($message_str)
            ->set_is_agent_reply($_SESSION['current_person']->Role === Roles::AGENT);

        self::save($message);
    }
}