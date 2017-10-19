<?php
/**
 * AgentService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/17/17
 */

include_once "mappers/AgentMapper.php";

class AgentService implements BaseService {
    static function get_by_username($username) {
        return AgentMapper::get_by_username($username);
    }

    static function save($agent)
    {
        if (isset($agent->PersonId))
            return AgentMapper::update(
                $agent->PersonId,
                $agent->UserName,
                $agent->FirstName,
                $agent->LastName,
                $agent->Email,
                $agent->Password,
                $agent->Rating
            );
        else
            return AgentMapper::add(
                $agent->UserName,
                $agent->FirstName,
                $agent->LastName,
                $agent->Email,
                $agent->Password
            );
    }
}