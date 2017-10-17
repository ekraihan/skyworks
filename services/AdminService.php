<?php
/**
 * AdminService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

include_once "mappers/PersonMapper.php";

class AdminService {
    static function get_by_username($username) {
        return PersonMapper::get_admin_by_username($username);
    }
}