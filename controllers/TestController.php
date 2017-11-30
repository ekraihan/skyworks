<?php
/**
 * TestController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/16/17
 */

class TestController extends Controller {

    public function default_action()
    {
        include "tests/services/status_service_test.php";
    }
}