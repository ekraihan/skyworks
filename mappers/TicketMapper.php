<?php
/**
 * TicketMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/2/17
 */


class TicketMapper extends Mapper {
    static private $get_open_tickets_grouped_by_product = "Call GET_OPEN_TICKETS_GROUPED_BY_PRODUCT()";

    static function get_open_tickets_grouped_by_product() {
        $get_statement = self::execute(self::$get_open_tickets_grouped_by_product, array());
        return $get_statement->fetchAll(PDO::FETCH_ASSOC);
    }
}