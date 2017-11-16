<?php
/**
 * product_service_test.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/15/17
 */

include_once "services/ProductService.php";

echo "<h3>############### Testing Product Service ###################</h3>";

function test_get_products() {
    echo "Testing get all <br><br>";
    print_r(ProductService::get_all());
    echo "<br><br>";
}

function test_get_by_id() {
    echo "Testing get By I <br><br>";
    print_r(ProductService::get_by_id(1));
    echo "<br><br>";
}

test_get_products();
test_get_by_id();