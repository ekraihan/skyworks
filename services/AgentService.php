<?php
/**
 * AgentService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/17/17
 */

class AgentService {
    static function get_agent_by_username($username) {
        return PersonMapper::get_agent_by_username($username);
    }
}