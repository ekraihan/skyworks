<?php
/**
 * PersonInfoControllerer.php.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";
include_once "services/UserService.php";
include_once "services/AgentService.php";
include_once "services/AdminService.php";

class PersonInfoController extends RestrictedController
{
    private $is_editing;
    private $person;
    public function __construct()
    {
        $this->is_editing = isset($_POST['edit-btn']);
        $this->person = $_SESSION['current_person'];
    }


    public function default_action()
    {

        if (isset($_POST["save-btn"]))
        {
            switch ($_SESSION['current_person']->Role) {
                case Roles::USER: $this->save_user();
                    break;
                case Roles::AGENT: $this->save_agent();
                    break;
                case Roles::ADMIN: $this->save_admin();
                    break;
            }
        }

        include "views/person_info.php";
    }

    private function save_user() {
        $this->person = clone $_SESSION['current_person'];
        $this->person->set_first_name($_POST["first_name"])
            ->set_last_name($_POST["last_name"])
            ->set_email($_POST["email"])
            ->set_password($_POST["password"]);

        if ($this->person->is_valid())
            $_SESSION['current_person'] = UserService::save($this->person);
        else
            $this->is_editing = true;
    }

    private function save_agent() {
        $this->person = clone $_SESSION['current_person'];
        $this->person->set_first_name($_POST["first_name"])
            ->set_last_name($_POST["last_name"])
            ->set_email($_POST["email"])
            ->set_password($_POST["password"]);

        if ($this->person->is_valid())
            $_SESSION['current_person'] = AgentService::save($this->person);
        else
            $this->is_editing = true;
    }

    private function save_admin() {
        $this->person = clone $_SESSION['current_person'];
        $this->person->set_first_name($_POST["first_name"])
            ->set_last_name($_POST["last_name"])
            ->set_email($_POST["email"])
            ->set_password($_POST["password"]);

        if ($this->person->is_valid())
            $_SESSION['current_person'] = AdminService::save($this->person);
        else
            $this->is_editing = true;
    }

    function is_valid_user()
    {
        return isset($_SESSION['current_person']);
        // AND is the person who's profile you are requesting the same as the current user logged in
    }
}