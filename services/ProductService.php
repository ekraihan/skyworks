<?php
/**
 * ProductServicee.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/19/17
 */
include_once "mappers/ProductMapper.php";
include_once "services/BaseService.php";

class ProductService implements BaseService {

    static function save($ticket)
    {

    }

    static function get_all() {
        return ProductMapper::get_all();
    }

    static function get_by_id($id)
    {
        return ProductMapper::get_by_id($id);
    }

    static function delete($model)
    {
        // TODO: Implement delete() method.
    }
}