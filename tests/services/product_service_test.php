<?php
/**
 * product_service_test.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */

include_once "services/ProductService.php";

echo "<h3>############### Testing Product Service ###################</h3>";

function test_get_products() {
    print_r(ProductService::get_all());
}

test_get_products();