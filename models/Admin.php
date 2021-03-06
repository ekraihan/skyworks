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
        parent::__construct();
        $this->Role = Roles::ADMIN;
    }

    function person_valid()
    {
        return true;
    }

    public function set_super_admin($value) {
        $this->SuperAdmin = (boolean)$value;
    }
}