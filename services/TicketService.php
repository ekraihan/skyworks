<?php
/**
 * TicketService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/2/17
 */

include_once "mappers/TicketMapper.php";

class TicketService implements BaseService {
    static function save($model)
    {
        // TODO: Implement save() method.
    }

    static function get_num_open_tickets_grouped_by_product() {
        return TicketMapper::get_open_tickets_grouped_by_product();
    }
}