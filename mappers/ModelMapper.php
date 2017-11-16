<?php
/**
 * ModelMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */

interface ModelMapper {

    static function update($model);

    static function get_all();

    static function get_by_id($id);

    static function delete($id);

    static function add($model);
}