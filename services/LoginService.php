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
}