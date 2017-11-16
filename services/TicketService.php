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
            return TicketMapper::add($ticket);
        }
    }

    static function get_all()
    {
        if ($_SESSION['current_person']->Role === Roles::USER)
            return TicketMapper::get_all_by_user_id($_SESSION['current_person']->PersonId);
        else if ($_SESSION['current_person']->Role === Roles::AGENT)
            return TicketMapper::get_all_by_agent_id($_SESSION['current_person']->PersonId);
        else if ($_SESSION['current_person']->Role === Roles::ADMIN)
            return TicketMapper::get_all();
    }

    static function get_by_id($id)
    {
        return TicketMapper::get_by_id($id);
    }

    static function delete($model)
    {
        // TODO: Implement delete() method.
    }

    static function get_num_open_tickets_grouped_by_product() {
        return TicketMapper::get_open_tickets_grouped_by_product();
    }
}