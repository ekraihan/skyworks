<?php
/**
 * BaseService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/18/17
 */

interface BaseService {
    /**
     * This method is expected to implement both update and add logic
     *
     * @param $model
     * @return mixed
     */
    static function save($model);

    static function get_all();

    static function get_by_id($id);

    static function delete($model);
}