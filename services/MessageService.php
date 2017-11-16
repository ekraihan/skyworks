<?php
/**
 * MessageService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */

include_once "services/BaseService.php";
include_once "mappers/MessageMapper.php";

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
}