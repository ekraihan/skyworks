<?php
/**
 * user_service_test.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/16/17
 */

include_once "services/UserService.php";

echo "<h3>########## Testing User Service ##########</h3>";

function test_get_user_by_email() {
    echo "test get user by email";
    print_r(UserService::get_by_email("ekraihan@iupui.edu"));
}

function test_register_user() {
    echo "test register user";

    $user = new User();
    $user->set_first_name("Chum")
        ->set_last_name("Bob")
        ->set_password("4ry89r7y498")
        ->set_email("yooyoo@tootoo.com")
        ->set_username("un4");
    print_r(UserService::save($user, "ekraihan@iupui.edu"));
}

//test_get_user_by_email();
test_register_user();