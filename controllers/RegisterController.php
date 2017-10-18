<?php
/**
 * RegisterController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "controllers/Controller.php";
include_once "models/User.php";

class RegisterController extends Controller {

    public function __construct()
    {
       // $this->model = ModelFactory::getUserModel();
    }

    function default_action()
    {

        // If the user info isn't set, set it to a blank array
        if (!isset($_SESSION['user']))
            $_SESSION['user'] = new User();

        $first_name_valid = true;
        $last_name_valid = true;
        $password_valid = true;
        $passwords_match = true;
        $email_present = true;
        $email_format_valid = true;
        $emails_match = true;

        $confirm_password = "";
        $confirm_email = "";

        if (isset($_POST['register'])) {
//            $_SESSION['current_person']->set_username("hoopla");

//            $user = UserService::save($user);

//            print_r($user);
//            // Name Information
//            $_SESSION['user']->first_name = htmlspecialchars(trim($_POST["first_name"]));
//            $first_name_valid = $_SESSION['user']->first_name_valid();
//
//            $_SESSION['user']->last_name = htmlspecialchars(trim($_POST["last_name"]));
//            $last_name_valid = $_SESSION['user']->last_name_valid();
//
//            // Password Information
//            $_SESSION['user']->password = htmlspecialchars(trim($_POST['password']));
//            $password_valid = $_SESSION['user']->password_valid();
//
//            $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
//            $passwords_match = $_SESSION['user']->passwords_match($confirm_password);
//
//            // Email Information
//            // Take emails to lowercase to make it easier for users to confirm their email
//            $_SESSION['user']->email = htmlspecialchars(strtolower(trim($_POST["email"])));
//            $email_present = $_SESSION['user']->email_present();
//            $email_format_valid = $_SESSION['user']->email_valid();
//
//            $confirm_email = htmlspecialchars(strtolower(trim($_POST['confirm_email'])));
//            $emails_match = $_SESSION['user']->emails_match($confirm_email);
//
//            if ($_SESSION['user']->is_valid($confirm_email, $confirm_password))
//                header("Location: index.php?module=login");
        }

        include "views/register.php";
    }
}