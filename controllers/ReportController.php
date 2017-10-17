<?php
/**
 * ReportController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";
include_once "models/Roles.enum.php";

class ReportController extends RestrictedController {
    public function default_action()
    {
        include "views/reports.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['current_person']) && $_SESSION['current_person']->Role === Roles::ADMIN;
    }
}