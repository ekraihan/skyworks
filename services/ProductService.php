<?php
/**
 * ProductServicee.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/19/17
 */
include_once "mappers/ProductMapper.php";

class ProductService implements BaseService {

    static function save($model)
    {

    }

    static function get_all() {
        return ProductMapper::get_all();
    }
}