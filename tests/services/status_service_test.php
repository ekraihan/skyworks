<?php
/**
 * status_service_test.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/16/17
 */

include_once "services/StatusService.php";

echo "<h3>############### Testing Status Service ###################</h3>";

function test_get_by_id() {
    echo "Testing get By I <br><br>";
    print_r(StatusService::get_by_id(1));
    echo "<br><br>";
}

function test_get_all() {
    echo "Testing Get All <br><br>";
    print_r(StatusService::get_all());
    echo "<br><br>";
}

//test_get_by_id();
test_get_all();