<?php
/**
 * AdminMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/18/17
 */
include_once "mappers/Mapper.php";
include_once "models/Admin.php";

class AdminMapper extends Mapper {
    static private $get_admin_by_username = "Call GET_ADMIN_BY_USERNAME(?)";
    static private $get_admin_by_id = "Call GET_ADMIN_BY_ID(?)";
    static private $update_admin = "Call UPDATE_ADMIN(?,?,?,?,?,?,?)";
    static private $add_admin = "Call ADD_ADMIN(?,?,?,?,?,?)";
    static private $get_all_admins = "CALL GET_ALL_ADMINS()";
    static private $delete_by_id = "CALL DELETE_ADMIN(?)";

    static function get_by_username($username) {
        $statement = self::get_connection()->prepare(self::$get_admin_by_username);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Admin');
        return $statement->fetch();
    }

    static function get_by_id($id) {
        $statement = self::get_connection()->prepare(self::$get_admin_by_id);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Admin');
        return $statement->fetch();
    }

    static function update($user_id, $username, $first_name, $last_name, $email, $password) {
        $statement = self::get_connection()->prepare(self::$update_admin);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Admin');
        return $statement->fetch();
    }

    static function add($username, $first_name, $last_name, $email, $password) {
        $statement = self::get_connection()->prepare(self::$add_admin);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Admin');
        return $statement->fetch();
    }

    static function get_all() {
        $statement = self::get_connection()->query(self::$get_all_admins);
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Admin');
        return $statement->fetchAll();
    }

    static function delete_by_id($id) {
        $statement = self::get_connection()->prepare(self::$delete_by_id);
        $statement->execute(func_get_args());
    }

}