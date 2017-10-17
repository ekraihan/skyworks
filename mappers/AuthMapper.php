<?php
/**
 * AuthMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

include_once "mappers/Mapper.php";

class AuthMapper extends Mapper {
    static private $validate_admin = "SELECT VALIDATE_ADMIN(?,?)";
    static private $validate_agent = "SELECT VALIDATE_AGENT(?,?)";


    static function admin_valid($username, $password) {
        $statement = self::get_connection()->prepare(self::$validate_admin);
        $statement->execute(func_get_args());
        return (boolean)$statement->fetchColumn();
    }

    static function agent_valid($username, $password) {
        $statement = self::get_connection()->prepare(self::$validate_agent);
        $statement->execute(func_get_args());
        return (boolean)$statement->fetchColumn();
    }
}