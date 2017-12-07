<?php
/**
 * UserService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/17/17
 */
include "services/BaseService.php";
include "mappers/UserMapper.php";


class UserService implements BaseService {
    static function get_by_username($username) {
        return UserMapper::get_by_username($username);
    }

    static public function save($user, $activation_code = null)
    {
        if (isset($user->PersonId))
            return UserMapper::update(
                $user->PersonId,
                $user->UserName,
                $user->FirstName,
                $user->LastName,
                $user->Email,
                $user->Password
            );
        else
            return UserMapper::add(
                $user->UserName,
                $user->FirstName,
                $user->LastName,
                $user->Email,
                $user->Password,
                $activation_code
            );
    }

    static public function get_all() {
        return UserMapper::get_all();
    }

    static public function get_by_id($id) {
        return UserMapper::get_by_id($id);
    }

    static public function get_by_email($email) {
        return UserMapper::get_by_email($email);
    }

    static public function delete($user){
        UserMapper::delete_by_id($user->PersonId);
    }

    static public function activate_user($code) {
        return UserMapper::activate_user($code);
    }
}