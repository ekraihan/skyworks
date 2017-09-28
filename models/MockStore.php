<?php
/**
 * MockStore.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/24/17
 */

class MockStore
{
    static private $products = array("Product 1", "Product 2", "Product 3", "Product 4", "Product 5", "Product 6");
    static private $admins = array("Admin 1", "Admin 2", "Admin 3", "Admin 4", "Admin 5", "Admin 6");
    static private $tickets = array(
        array(
            "name" => "Ticket 1",
            "messages"=>array("I need help", "I can help")
        ),
        array(
            "name"=>"Ticket 2",
            "messages"=>array("I need help", "I can help")
        ),
        array(
            "name"=>"Ticket 3",
            "messages"=>array("I need help", "I can help")
        )
    );

    static private $users = array(
        array(
            "first_name" => "Billy",
            "last_name" => "Bob",
            "role" => "Agent"
        ),
        array(
            "first_name" => "Sally",
            "last_name" => "Suz",
            "role" => "User"
        ),
        array(
            "first_name" => "Robert",
            "last_name" => "Buck",
            "role" => "Admin"
        ),
    );

    static private $agents = array("Agent 1", "Agent 2", "Agent 3", "Agent 4", "Agent 5", "Agent 6");
    static private $filter_options = array("Filter Option 1", "Filter Option 2", "Filter Option 3", "Filter Option 4", "Filter Option 5", "Filter Option 6");

    static public function create()
    {
        return "created";
    }

    static public function get_by_id($type, $id)
    {
        $type = $type . "s";
        if (!property_exists(get_class(), $type))
            throw new UnexpectedValueException("Value '" . $type . "' not in store");

        return self::${$type}[$id];
    }

    static public function get_all_by_type($type)
    {
        $type = $type . "s";
        if (!property_exists(get_class(), $type))
            throw new UnexpectedValueException("Value \"" . $type . "\" not in store");

        return self::${$type};
    }

    static public function update($object)
    {
        return "updated";
    }

    static public function delete($object)
    {
        return "deleted";
    }
}