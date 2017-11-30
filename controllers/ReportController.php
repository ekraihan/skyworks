<?php
/**
 * ReportController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";
include_once "models/Roles.enum.php";
include_once "mappers/UserMapper.php";
include_once "services/TicketService.php";
class ReportController extends RestrictedController {
    public function default_action()
    {
        $users = UserMapper::get_all();
        $open_tickets_grouped_by_product = TicketService::get_num_open_tickets_grouped_by_product();

        // Prepare data
        $data = "[";
        $labels = "[";

        foreach($open_tickets_grouped_by_product as $id => $row) {
            $data = $data . $row['ProductCount'];
            $labels = $labels . $row['ProductName'];
            if ($id != 2) {
                $labels = $labels . ",";
                $data = $data . ",";
            }

        }

        $data = $data . "]";
        $labels = $labels . "]";

//        echo $data;
//        echo $labels;


        include "views/reports.php";
    }

    function is_valid_user()
    {
        return isset($_SESSION['current_person']) && $_SESSION['current_person']->Role === Roles::ADMIN;
    }
}