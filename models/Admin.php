<?php
/**
 * Admin.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

class Admin extends BasePerson {
    private $SuperAdmin;

    function __construct()
    {
        $this->Role = Roles::ADMIN;
    }
}