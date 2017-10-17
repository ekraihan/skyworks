<?php
/**
 * Mapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

class Mapper {
    protected static function get_connection() {
        static $connection = null;

        if ($connection === null)
            return new PDO("mysql:host=localhost;dbname=ekraihan_db", "ekraihan", "77aadd");

        return $connection;
    }
}