<?php
/**
 * TicketMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/2/17
 */


class TicketMapper extends Mapper {
    static private $get_open_tickets_grouped_by_product = "Call GET_OPEN_TICKETS_GROUPED_BY_PRODUCT()";
    static private $add_ticket = "Call ADD_TICKET(?,?,?,?,?)";
    static private $return_id = "@return_id";

    static function get_open_tickets_grouped_by_product() {
        $get_statement = self::execute(self::$get_open_tickets_grouped_by_product);
        return $get_statement->fetchAll(PDO::FETCH_ASSOC);
    }

    static function add_ticket($product_id, $creation_date, $status_id, $user_id, $agent_id) {
        self::execute(self::$add_ticket, func_get_args())->closeCursor();
        return self::get_connection()->query("SELECT " . self::$return_id);
    }
}