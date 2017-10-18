<?php
/**
 * UserMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/18/17
 */

include_once "mappers/Mapper.php";
include_once "models/User.php";

class UserMapper extends Mapper {
    static private $get_user_by_username = "Call GET_USER_BY_USERNAME(?)";
    static private $update_user = "Call UPDATE_USER(?,?,?,?,?,?)";
    static private $add_user = "Call ADD_USER(?,?,?,?,?)";

    static function get_by_username($username) {
        $statement = self::get_connection()->prepare(self::$get_user_by_username);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
        return $statement->fetch();
    }

    static function update($user_id, $username, $first_name, $last_name, $email, $password) {
        $statement = self::get_connection()->prepare(self::$update_user);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
        return $statement->fetch();
    }

    static function add($username, $first_name, $last_name, $email, $password) {
        $statement = self::get_connection()->prepare(self::$add_user);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'User');
        return $statement->fetch();
    }

}