<?php
/**
 * Agent.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/17/17
 */

class Agent extends BasePerson {
    private $Rating;

    function __construct()
    {
        $this->Role = Roles::AGENT;
    }
}