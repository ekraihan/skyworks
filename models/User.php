<?php
/**
 * User.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "models/BasePerson.php";

class User extends BasePerson {

    function __construct()
    {
        parent::__construct();
        $this->Role = Roles::USER;
    }

    function person_valid()
    {
        return true;
    }
}