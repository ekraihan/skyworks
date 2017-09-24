<?php
/**
 * ProductController.phpR: Elias Kraihanzel
 * DATE: 9/17/17
 */

class Product {
    private $name;

    function __construct($product)
    {
        $this->name = $product;
    }

    function get_name()
    {
        return $this->name;
    }
}