<?php
/**
 * ProductMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/19/17
 */

include_once "models/Product.php";
include_once "mappers/Mapper.php";

class ProductMapper extends  Mapper {
    static private $get_all_products = "CALL GET_ALL_PRODUCTS()";

    static public function get_all() {
        $statement = self::get_connection()->query(self::$get_all_products);
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Product');
        return $statement->fetchAll();
    }
}