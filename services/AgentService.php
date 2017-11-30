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

    static public function get_all() {
        return AgentMapper::get_all();
    }

    static public function get_by_id($id) {
        return AgentMapper::get_by_id($id);
    }

    static public function delete($agent){
        AgentMapper::delete_by_id($agent->PersonId);
    }

    static public function update_rating($agentId, $incoming_rating) {
        return AgentMapper::update_agent_rating($agentId, $incoming_rating);
    }
}