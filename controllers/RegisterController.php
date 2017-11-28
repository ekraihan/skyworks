<?php
/**
 * RegisterController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "controllers/Controller.php";
include_once "models/User.php";
include_once "services/VerifyService.php";

class RegisterController extends Controller {

    function default_action()
    {
        $new_user = new User();

        $first_name_valid = true;
        $last_name_valid = true;
        $email_valid = true;
        $password_valid = true;
        $username_valid = true;
        $username_taken = false;

        if (isset($_POST['register'])) {
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


            if (VerifyService::user_valid($new_user)) {
                UserService::save($new_user);
                header("Location: index.php?module=login");
            }
        }

        include "views/register.php";
    }
}