<?php
/**
 * TicketMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/2/17
 */

include_once "mappers/ModelMapper.php";
include_once "mappers/Mapper.php";


class TicketMapper extends Mapper implements ModelMapper {
    static private $get_open_tickets_grouped_by_product = "Call GET_OPEN_TICKETS_GROUPED_BY_PRODUCT()";
    static private $add_ticket = "Call ADD_TICKET(?,?)";

    static function get_open_tickets_grouped_by_product() {
        $get_statement = self::execute(self::$get_open_tickets_grouped_by_product);
        return $get_statement->fetchAll(PDO::FETCH_ASSOC);
    }

    static function add($ticket) {
        self::execute(self::$add_ticket, array($ticket->ProductId, $ticket->UserId));
    }

    static function update($model)
    {
        // TODO: Implement update() method.
    }

    static function get_all()
    {
        // TODO: Implement get_all() method.
    }

    static function get_by_id($id)
    {
        // TODO: Implement get_by_id() method.
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }
}