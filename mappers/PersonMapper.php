<?php
/**
 * PersonMapper.php * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

include_once "mappers/Mapper.php";
include_once "models/Admin.php";

class PersonMapper extends Mapper {
    static private $get_admin_by_username = "Call GET_ADMIN_BY_USERNAME(?)";

    static function get_admin_by_username($username) {
        $statement = self::get_connection()->prepare(self::$get_admin_by_username);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Admin');
        return $statement->fetch();
    }
}
