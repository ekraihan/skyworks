<?php
/**
 * LoginService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

include_once "mappers/AuthMapper.php";

class LoginService {
    static function login_admin($username, $password) {
        return AuthMapper::admin_valid($username, $password);
    }

    static function login_agent($username, $password) {
        return AuthMapper::agent_valid($username, $password);
    }

    static function login_user($username, $password) {
        return AuthMapper::user_valid($username, $password);
    }
}