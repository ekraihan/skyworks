<?php
/**
 * Admin.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

class Admin extends BasePerson {
    protected $SuperAdmin;

    function __construct()
    {
        $this->Role = Roles::ADMIN;
    }

    function person_valid()
    {
        return true;
    }
}