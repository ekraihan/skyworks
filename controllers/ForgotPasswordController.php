<?php
/**
 * ForgotPasswordController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 11/16/17
 */

include_once "services/EmailService.php";

class ForgotPasswordController extends Controller {

    public function default_action()
    {
        $email_valid = true;
        $email = "";
        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            if (VerifyService::email_valid($email))
            {
                $user = UserService::get_by_email($email);
                $user->set_password("j38a723f");
                UserService::save($user);

                EmailService::send_email($email, "Guest", "Password Reset", "Your new password is j38a723f.");

                header("Location: index.php?module=login");
            }
            else
            {
                $email_valid = false;
            }

        }
        include "views/forgot_password.php";
    }
}