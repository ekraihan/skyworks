<?php
/**
 * EditController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "controllers/RestrictedController.php";
include_once "models/MockStore.php";

class EditController extends RestrictedController {

    private $is_editing;
    private $is_adding_user;
    private $current_editing;

    public function __construct()
    {
        $this->is_editing = isset($_POST['edit_btn']);
        $this->is_adding_user = isset($_POST['add_usr_btn']);
    }

    public function default_action()
    {
        if (isset($_POST['user_id']))
            $this->current_editing = $_SESSION['currently_editing_user'] = UserService::get_by_id($_POST['user_id']);

        if (isset($_SESSION['currently_editing_user']))
            $this->current_editing = $_SESSION['currently_editing_user'];

        if (isset($_POST['save_btn'])) {
            $this->current_editing = clone $_SESSION['currently_editing_user'];
            $this->current_editing->set_first_name($_POST["first_name"])
                ->set_last_name($_POST["last_name"])
                ->set_email($_POST["email"]);

            if (VerifyService::user_valid($this->current_editing))
            {
                $_SESSION['currently_editing_user'] = UserService::save($this->current_editing);
            }
            else
            {
                $this->is_editing = true;
            }
        }

        if (isset($_POST['delete_btn']))
        {
            UserService::delete($_SESSION['currently_editing_user']);
            $this->current_editing = $_SESSION['currently_editing_user'] = null;
        }

        $people = UserService::get_all();
        include "views/edit.php";
    }

    public function view_agents()
    {
        if (isset($_POST['user_id']))
            $this->current_editing = $_SESSION['currently_editing_agent'] = AgentService::get_by_id($_POST['user_id']);

        if (isset($_SESSION['currently_editing_agent']))
            $this->current_editing = $_SESSION['currently_editing_agent'];

        if (isset($_POST['save_btn']))
        {
            $this->current_editing = clone $_SESSION['currently_editing_agent'];
            $this->current_editing->set_first_name($_POST["first_name"])
                ->set_last_name($_POST["last_name"])
                ->set_email($_POST["email"]);

            if (VerifyService::agent_valid($this->current_editing))
            {
                $_SESSION['currently_editing_agent'] = AgentService::save($this->current_editing);
            }
            else
            {
                $this->is_editing = true;
            }
        }

        if (isset($_POST['delete_btn']))
        {
            AgentService::delete($_SESSION['currently_editing_agent']);
            $this->current_editing = $_SESSION['currently_editing_agent'] = null;
        }

        $people = AgentService::get_all();
        include "views/edit_agent.php";
    }

    public function view_admins() {
        if (isset($_POST['user_id']))
            $this->current_editing = $_SESSION['currently_editing_admin'] = AdminService::get_by_id($_POST['user_id']);

        if (isset($_SESSION['currently_editing_admin']))
            $this->current_editing = $_SESSION['currently_editing_admin'];

        if (isset($_POST['save_btn']))
        {
            $this->current_editing = clone $_SESSION['currently_editing_admin'];
            $this->current_editing->set_first_name($_POST["first_name"])
                ->set_last_name($_POST["last_name"])
                ->set_email($_POST["email"]);

            if (VerifyService::agent_valid($this->current_editing))
            {
                $_SESSION['currently_editing_admin'] = AdminService::save($this->current_editing);
            }
            else
            {
                $this->is_editing = true;
            }
        }

        if (isset($_POST['delete_btn']))
        {
            AgentService::delete($_SESSION['currently_editing_admin']);
            $this->current_editing = $_SESSION['currently_editing_admin'] = null;
        }

        $people = AdminService::get_all();
        include "views/edit_admin.php";
    }

    public function add_admin() {
        $new_user = new Admin();

        $first_name_valid = true;
        $last_name_valid = true;
        $email_valid = true;
        $password_valid = true;
        $username_valid = true;
        $username_taken = false;

        if (isset($_POST['add_admin'])) {
            $new_user->set_first_name(htmlspecialchars(trim($_POST["first_name"])))
                ->set_last_name(htmlspecialchars(trim($_POST["last_name"])))
                ->set_password(htmlspecialchars(trim($_POST['password'])))
                ->set_email(htmlspecialchars(trim($_POST['email'])))
                ->set_username(htmlspecialchars(trim($_POST['username'])))
                ->set_super_admin(isset($_POST['super_admin']));

            $first_name_valid = VerifyService::first_name_valid($new_user->FirstName);
            $last_name_valid = VerifyService::last_name_valid($new_user->LastName);
            $email_valid = VerifyService::email_valid($new_user->Email);
            $password_valid = VerifyService::password_valid($new_user->Password);
            $username_valid = VerifyService::username_valid($new_user->UserName);
            $username_taken = VerifyService::username_taken($new_user->UserName);


            if (VerifyService::admin_valid($new_user)
                && !VerifyService::username_taken($new_user->UserName)
                && VerifyService::username_valid($new_user->UserName)) {
                $this->current_editing = $_SESSION['currently_editing_admin'] = AdminService::save($new_user);
                header("Location: index.php?module=edit&action=view_admins");
            }
            else
            {
                $this->is_adding_user = true;
            }
        }

        $people = AdminService::get_all();
        include "views/edit_admin.php";
    }

    public function add_agent() {
        $new_user = new Agent();

        $first_name_valid = true;
        $last_name_valid = true;
        $email_valid = true;
        $password_valid = true;
        $username_valid = true;
        $username_taken = false;

        if (isset($_POST['add_agent'])) {
            $new_user->set_first_name(htmlspecialchars(trim($_POST["first_name"])))
                ->set_last_name(htmlspecialchars(trim($_POST["last_name"])))
                ->set_password(htmlspecialchars(trim($_POST['password'])))
                ->set_email(htmlspecialchars(trim($_POST['email'])))
                ->set_username(htmlspecialchars(trim($_POST['username'])));

            $first_name_valid = VerifyService::first_name_valid($new_user->FirstName);
            $last_name_valid = VerifyService::last_name_valid($new_user->LastName);
            $email_valid = VerifyService::email_valid($new_user->Email);
            $password_valid = VerifyService::password_valid($new_user->Password);
            $username_valid = VerifyService::username_valid($new_user->UserName);
            $username_taken = VerifyService::username_taken($new_user->UserName);

            if (VerifyService::agent_valid($new_user)
                && !VerifyService::username_taken($new_user->UserName)
                && VerifyService::username_valid($new_user->UserName)) {
                $this->current_editing = $_SESSION['currently_editing_agent'] = AgentService::save($new_user);
                header("Location: index.php?module=edit&action=view_agents");
            }
            else
            {
                $this->is_adding_user = true;
            }
        }

        $people = AgentService::get_all();
        include "views/edit_agent.php";
    }

    public function add_user() {
        $new_user = new User();

        $first_name_valid = true;
        $last_name_valid = true;
        $email_valid = true;
        $password_valid = true;
        $username_valid = true;
        $username_taken = false;

        if (isset($_POST['add_user'])) {
            $new_user->set_first_name(htmlspecialchars(trim($_POST["first_name"])))
                ->set_last_name(htmlspecialchars(trim($_POST["last_name"])))
                ->set_password(htmlspecialchars(trim($_POST['password'])))
                ->set_email(htmlspecialchars(trim($_POST['email'])))
                ->set_username(htmlspecialchars(trim($_POST['username'])));

            $first_name_valid = VerifyService::first_name_valid($new_user->FirstName);
            $last_name_valid = VerifyService::last_name_valid($new_user->LastName);
            $email_valid = VerifyService::email_valid($new_user->Email);
            $password_valid = VerifyService::password_valid($new_user->Password);
            $username_valid = VerifyService::username_valid($new_user->UserName);
            $username_taken = VerifyService::username_taken($new_user->UserName);


            if (VerifyService::user_valid($new_user)
                && !VerifyService::username_taken($new_user->UserName)
                && VerifyService::username_valid($new_user->UserName)) {
                $this->current_editing = $_SESSION['currently_editing_user'] = UserService::save($new_user);
                header("Location: index.php?module=edit");
            }
            else
            {
                $this->is_adding_user = true;
            }
        }

        $people = UserService::get_all();
        include "views/edit.php";
    }

    function is_valid_user()
    {
        return $_SESSION['current_person']->Role === Roles::ADMIN;
    }
}