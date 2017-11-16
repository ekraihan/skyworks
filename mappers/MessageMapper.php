<?php
/**
 * MessageMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */

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

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }

    static function add($model)
    {
        self::execute(self::$add_message, array($model->AgentId, $model->UserId, $model->Message, $model->TicketId, $model->IsAgentReply));
    }
}