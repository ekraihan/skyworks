<?php
/**
 * ProductMapper.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/19/17
 */

include_once "models/Product.php";
include_once "mappers/Mapper.php";

class ProductMapper extends Mapper implements ModelMapper {
    static private $get_all_products = "CALL GET_ALL_PRODUCTS()";

    static public function get_all() {
        $statement = self::execute(self::$get_all_products);
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Product');
        return $statement->fetchAll();
    }

    static function update($model)
    {
        // TODO: Implement update() method.
    }

    static function get_by_id($id)
    {
        $get_by_id = "CALL GET_PRODUCT_BY_ID(?)";
        $statement = self::execute($get_by_id, func_get_args());
        $statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Product');
        return $statement->fetch();
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }

    static function add($model)
    {
        // TODO: Implement add() method.
    }
}