<?php
/**
 * ProductStoreStore.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "Product.php";

$product_array = array("EmberIt", "Spelunker", "AIScheduler", "RETINA", "QuickReader", "RocketAway");

class ProductStore {
    function __construct() { }

    static function get_products()
    {
        global $product_array;

        $products = array();

        foreach ($product_array as $product) :
            array_push($products, new Product($product));
        endforeach;

        return $products;
    }

    static function get_product($id)
    {
        return new Product($id);
    }
}

