<?php
/**
 * UserService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/17/17
 */

class UserService {
    static function get_by_username($username) {
        return PersonMapper::get_user_by_username($username);
    }
}