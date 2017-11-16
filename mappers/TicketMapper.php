<?php
/**
 * TicketMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/2/17
 */

include_once "mappers/ModelMapper.php";
include_once "mappers/Mapper.php";
include_once "models/Ticket.php";

class TicketMapper extends Mapper implements ModelMapper {
    static private $get_open_tickets_grouped_by_product = "Call GET_OPEN_TICKETS_GROUPED_BY_PRODUCT()";
    static private $get_by_id = "Call GET_TICKET_BY_ID(?)";

    static function get_open_tickets_grouped_by_product() {
        $get_statement = self::execute(self::$get_open_tickets_grouped_by_product);
        return $get_statement->fetchAll(PDO::FETCH_ASSOC);
    }

    static function add($ticket) {
        $add_ticket = "Call ADD_TICKET(?,?," . self::$global_var . ")";

        self::execute($add_ticket, array($ticket->ProductId, $ticket->UserId));
        $ticket_id = self::get_global_variable();
        return self::get_by_id($ticket_id);
    }

    static function update($model)
    {
        // TODO: Implement update() method.
    }

    static function get_all()
    {
        $get_all_tickets = "CALL GET_ALL_TICKETS()";
        $statement = self::execute($get_all_tickets);
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Ticket');
        return $statement->fetchAll();
    }

    static function get_all_by_user_id($id)
    {
        $get_tickets_by_user_id = "CALL GET_TICKETS_BY_USER_ID(?)";
        $statement = self::execute($get_tickets_by_user_id, func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Ticket');
        return $statement->fetchAll();
    }

    static function get_all_by_agent_id($id)
    {
        $get_tickets_by_agent_id = "CALL GET_TICKETS_BY_AGENT_ID(?)";
        $statement = self::execute($get_tickets_by_agent_id, func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Ticket');
        return $statement->fetchAll();
    }

    static function get_by_id($id)
    {
        $statement = self::execute(self::$get_by_id, array($id));
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Ticket');
        return $statement->fetch();
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }
}