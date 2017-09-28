<?php
/**
 * MockStore.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/24/17
 */

class MockStore
{
    static private $products = array("Product 1", "Product 2", "Product 3", "Product 4", "Product 5", "Product 6");
    static private $tickets = array(
        array(
            "name" => "Ticket 1",
            "status" => "Being researched",
            "messages"=>array("I need help", "I can help")
        ),

        array(
            "name"=>"Ticket 2",
            "status" => "Fixed",
            "messages"=>array("I need help", "I can help")
        ),
        array(
            "name"=>"Ticket 3",
            "status" => "Closed",
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

    static private $statuses = array("Waiting to be addressed", "Being researched", "Fixed", "Verified by Customer", "Closed");
    static private $filter_options = array("Filter Option 1", "Filter Option 2", "Filter Option 3", "Filter Option 4", "Filter Option 5", "Filter Option 6");

    static public function create()
    {
        return "created";
    }

    static public function get_by_id($type, $id)
    {
        if (!property_exists(get_class(), $type))
            throw new UnexpectedValueException("Value '" . $type . "' not in store");

        return self::${$type}[$id];
    }

    static public function get_all_by_type($type)
    {
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