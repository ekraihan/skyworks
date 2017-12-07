<?php
/**
 * RegisterController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "controllers/Controller.php";
include_once "models/User.php";
include_once "services/VerifyService.php";
include_once "utils/mail/mail.class.php";
include_once "utils/string_util.php";

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


            if (VerifyService::user_valid($new_user)
                && !VerifyService::username_taken($new_user->UserName)
                && VerifyService::username_valid($new_user->UserName)) {

                $activation_code = randomCodeGenerator(55);
                UserService::save($new_user, $activation_code);

//                $subject = "Email Activation";
//
//                $body =
//                    '<p style="border-style: groove; border-radius: 7px; border-color: brown;
//                           font-family: audiowide-regular-webfont; font-size: 23px; font-weight: normal;
//                            text-transform: uppercase;">
//                    Hello '. $new_user->FirstName . '. Please click on this url to activate your account.
//             </p><br/>
//             http://corsair.cs.iupui.edu:21191/lab4/login.php?confirmation_id='.$activation_code;
//                $mailer = new Mail();
//                if (($mailer->sendMail($new_user->Email, $new_user->FirstName, $subject, $body))==true)
//                    // Transition over to confirmation_sent.php, which will tell the user that they were sent a confirmation email
//                    header("Location: index.php?module=login?email=".$new_user->Email);
//                else
//                {
//                    $send_email_error = "There was a problem sending your confirmation email. Please try again.";
//                }
                header("Location: index.php?module=login");
            }
        }

        include "views/register.php";
    }
}