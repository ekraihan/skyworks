<?php
/**
 * StatusMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/16/17
 */

include_once "mappers/ModelMapper.php";
include_once "mappers/Mapper.php";
include_once "models/Status.php";

class StatusMapper extends Mapper implements ModelMapper {

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
        $get_by_id = "CALL GET_STATUS_BY_ID(?)";
        $statement = self::execute($get_by_id, func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Status');
        return $statement->fetch();
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }

    static function add($model)
    {
        // TODO: Implement add() method.
    }
}