<?php
/**
 * Mapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/16/17
 */

abstract class Mapper {

    static protected $global_var = "@global_var";

    private static $statement;

    protected static function get_connection() {
        static $connection = null;

        if ($connection === null)
            $connection = new PDO("mysql:host=localhost;dbname=ekraihan_db", "ekraihan", "77aadd");

        return $connection;
    }

    protected static function execute($sql, $args = array()) {
        if(isset(self::$statement))
            self::$statement->closeCursor();

        self::$statement = self::get_connection()->prepare($sql);
        self::$statement->execute($args);
        return self::$statement;
    }

    protected final static function get_global_variable() {
        return self::get_connection()
            ->query("SELECT " . self::$global_var . " as id")
            ->fetch(PDO::FETCH_OBJ)
            ->id;
    }
}