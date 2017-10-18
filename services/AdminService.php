<?php
/**
 * AdminService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

include_once "mappers/AdminMapper.php";

class AdminService implements BaseService {
    static function get_by_username($username) {
        return AdminMapper::get_by_username($username);
    }

    static function save($admin)
    {
        if (isset($admin->PersonId))
            return AdminMapper::update(
                $admin->PersonId,
                $admin->UserName,
                $admin->FirstName,
                $admin->LastName,
                $admin->Email,
                $admin->Password,
                $admin->SuperAdmin
            );
        else
            return AdminMapper::add(
                $admin->UserName,
                $admin->FirstName,
                $admin->LastName,
                $admin->Email,
                $admin->Password,
                $admin->SuperAdmin
            );
    }
}