<?php
/**
 * TicketService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/2/17
 */

include_once "mappers/TicketMapper.php";
include_once "services/BaseService.php";

class TicketService implements BaseService {
    static function save($ticket)
    {
        if (isset($ticket->TicketId))
        {
            echo "trying to edit a ticket";
        }
        else
        {
            TicketMapper::add($ticket);
        }
    }

    static function get_all()
    {
        // TODO: Impqlement get_all() method.
    }

    static function get_by_id($id)
    {
        // TODO: Implement get_by_id() method.
    }

    static function delete($model)
    {
        // TODO: Implement delete() method.
    }

    static function get_num_open_tickets_grouped_by_product() {
        return TicketMapper::get_open_tickets_grouped_by_product();
    }
}