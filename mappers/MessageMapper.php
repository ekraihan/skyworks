<?php
/**
 * MessageMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */
include_once "mappers/Mapper.php";
include_once "mappers/ModelMapper.php";
include_once "models/Message.php";

class MessageMapper extends Mapper implements ModelMapper {
    private static $add_message = "CALL ADD_MESSAGE(?,?,?,?,?)";

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

    static function get_all_by_ticket_id($id) {
        $get_by_ticket_id = "CALL GET_MESSAGES_BY_TICKET_ID(?)";
        $statement = self::execute($get_by_ticket_id, func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Message');
        return $statement->fetchAll();
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }

    static function add($model)
    {
        self::execute(self::$add_message, array($model->AgentId, $model->UserId, $model->Message, $model->TicketId, $model->IsAgentReply));
    }
}