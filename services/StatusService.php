<?php
/**
 * StatusService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/16/17
 */

include_once "mappers/StatusMapper.php";
include_once "services/BaseService.php";

class StatusService implements BaseService {

    static function get_all()
    {
        // TODO: Implement get_all() method.
    }

    static function get_by_id($id)
    {
        return StatusMapper::get_by_id($id);
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * This method is expected to implement both update and add logic
     *
     * @param $model
     * @return mixed
     */
    static function save($model)
    {
        // TODO: Implement save() method.
    }
}