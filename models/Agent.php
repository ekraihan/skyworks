<?php
/**
 * Agent.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/17/17
 */

class Agent extends BasePerson {
    protected $Rating;

    function __construct()
    {
        parent::__construct();
        $this->Role = Roles::AGENT;
    }

    function person_valid()
    {
        return true;
    }

    function set_rating($Rating) {
        $this->Rating = $Rating;
    }
}