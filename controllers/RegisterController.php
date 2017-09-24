<?php
/**
 * RegisterController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "controllers/Controller.php";

class RegisterController extends Controller {

    private $model;

    function user_valid()
    {
        return true;
    }


    public function __construct()
    {
       // $this->model = ModelFactory::getUserModel();
    }

    function default_action()
    {

//        $user = $this->model->create();
//        // a variable to determine whether or not the user is logged in
//        $_SESSION['logged_in'] = false;
//
        if (isset($_POST['enter']))
        {
//            // Name Information
//            UserService::set_first_name()
//
//            $new_user->first_name = htmlspecialchars(trim($_POST["first_name"]));
//            $new_user->last_name = htmlspecialchars(trim($_POST["last_name"]));
//
//
//            // Password Information
//            $_SESSION['user_info']['password'] = htmlspecialchars(trim($_POST['password']));
//            $password_valid = $_SESSION['user_info']['password'] !== "";
//            $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
//            $passwords_match = $_SESSION['user_info']['password'] === $confirm_password;
//
//            // Email Information
//            // Take emails to lowercase to make it easier for users to confirm their email
//            $_SESSION['user_info']['email'] = htmlspecialchars(strtolower(trim($_POST["email"])));
//            $email_present = $_SESSION['user_info']['email'] !== "";
//            $email_format_valid = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//            $confirm_email = htmlspecialchars(strtolower(trim($_POST['confirm_email'])));
//            $emails_match = $_SESSION['user_info']['email'] === $confirm_email;
//
//            // Gender Information
//            $_SESSION['user_info']['gender'] = trim($_POST['gender']);
//            $gender_valid = $_SESSION['user_info']['gender'] !== "";
//
//            // Department Information
//            $_SESSION['user_info']['department'] = trim($_POST["department"]);
//            $department_valid = $_SESSION['user_info']['department'] !== "";
//
//            // Status Information
//            $_SESSION['user_info']['statuses'] = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
//
//            // Agreement Information
//            $agreed = isset($_POST['agree']);
//
//            if ($new_user->is_valid)
//            {
//                $_SESSION['confirmation_id'] = randomCodeGenerator(55);
//                $subject = "Email Activation";
//
//                $body =
//                    '<p style="border-style: groove; border-radius: 7px; border-color: brown;
//                           font-family: audiowide-regular-webfont; font-size: 23px; font-weight: normal;
//                            text-transform: uppercase;">
//                    Hello '. $_SESSION['user_info']['first_name'] . '. Please click on this url to activate your account. </p><br/>
//			        http://corsair.cs.iupui.edu:21191/lab2/login.php?confirmation_id='.$_SESSION['confirmation_id'].'
//			    ';
//                $mailer = new Mail();
//                if (($mailer->sendMail($_SESSION['user_info']['email'], $_SESSION['user_info']['first_name'], $subject, $body))==true)
//                    // Transition over to confirmation_sent.php, which will tell the user that they were sent a confirmation email
                   // header("Location: confirmation_sent.php");
//                else
//                {
//                    $send_email_error = "There was a problem sending your confirmation email. Please try again.";
//                }
//            }
            header("Location: index.php?module=user");
        }

        $genders = array("Male", "Female");
        $departments = array("Computer Science", "Math", "Physics", "Social Work", "Electrical Engineering");
        $statuses = array("Staff", "Faculty", "Student");


        include "views/register.php";
    }

    /**
     * @method is_department_selected
     *
     * @param 			$department				the name of a department
     * @return 			a string to determine whether or not to display this department in a dropdown
     *
     * If a user has selected the department, return "selected". else return "";
     */
    function is_department_selected($department)
    {
        return ($department === $_SESSION['user_info']['department']) ? "selected" : "";
    }

    /**
     * @method is_gender_selected
     *
     * @param 			$gender				the name of a gender
     * @return 			a string to determine whether or not to display this gender as a selected radio button
     *
     * If a user has selected the gender, return "checked". else return "";
     */
    static function is_gender_selected($gender)
    {
        return ($gender === $_SESSION['user_info']['gender']) ? "checked" : "";
    }

    /**
     * @method is_status_selected
     *
     * @param 			$status				the name of a status
     * @return 			a string to determine whether or not to display this status as a selected checkbox
     *
     * If a user has selected the status, return "checked". else return "";
     */
    function is_status_selected($status)
    {
        return (in_array($status, $_SESSION['user_info']['statuses'])) ? "checked" : "";
    }


}