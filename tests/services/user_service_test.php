<?php
/**
 * user_service_test.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/16/17
 */

include_once "services/UserService.php";

echo "<h3>########## Testing User Service ##########</h3>";

function test_get_user_by_email() {
    echo "dude";
    print_r(UserService::get_by_email("ekraihan@iupui.edu"));
}

test_get_user_by_email();