<?php
/**
 * Mapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

abstract class Mapper {

    protected static function get_connection() {
        static $connection = null;

        if ($connection === null)
            $connection = new PDO("mysql:host=localhost;dbname=ekraihan_db", "ekraihan", "77aadd");

        return $connection;
    }

    protected final static function execute($sql, $args = array()) {
        static $statement = null;

        if ($statement !== null)
            $statement->closeCursor();

        $statement = self::get_connection()->prepare($sql);
        $statement->execute($args);
        return $statement;
    }

    protected final static function finish_execute() {

    }
}