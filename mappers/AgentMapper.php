<?php
/**
 * AgentMapperphp * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

include_once "mappers/Mapper.php";
include_once "models/Agent.php";

class AgentMapper extends Mapper {
    static private $get_agent_by_username = "Call GET_AGENT_BY_USERNAME(?)";
    static private $get_agent_by_id = "Call GET_AGENT_BY_ID(?)";
    static private $update_agent = "Call UPDATE_AGENT(?,?,?,?,?,?,?)";
    static private $add_agent = "Call ADD_AGENT(?,?,?,?,?)";
    static private $get_all_agents = "CALL GET_ALL_AGENTS()";
    static private $delete_by_id = "CALL DELETE_AGENT(?)";

    static function get_by_username($username) {
        $statement = self::get_connection()->prepare(self::$get_agent_by_username);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Agent');
        return $statement->fetch();
    }

    static function get_by_id($id) {
        $statement = self::get_connection()->prepare(self::$get_agent_by_id);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Agent');
        return $statement->fetch();
    }

    static function update($user_id, $username, $first_name, $last_name, $email, $password, $rating) {
        $statement = self::get_connection()->prepare(self::$update_agent);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Agent');
        return $statement->fetch();
    }

    static function add($username, $first_name, $last_name, $email, $password) {
        $statement = self::get_connection()->prepare(self::$add_agent);
        $statement->execute(func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Agent');
        return $statement->fetch();
    }

    static function get_all() {
        $statement = self::get_connection()->query(self::$get_all_agents);
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Agent');
        return $statement->fetchAll();
    }

    static function delete_by_id($id) {
        $statement = self::get_connection()->prepare(self::$delete_by_id);
        $statement->execute(func_get_args());
    }

    static function update_agent_rating($agentId, $incoming_rating) {
        $update_agent_rating = "CALL UPDATE_AGENT_RATING(?,?)";
        self::execute($update_agent_rating, func_get_args());
    }
}
