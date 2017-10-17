<?php
/**
 * User.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "models/BasePerson.php";
include_once "utils/string_util.php";

class User extends BasePerson {

    function __construct()
    {
        $this->Role = Roles::USER;
    }

    /**
     * is_valid
     *
     * @param       $confirm_email
     * @param       $confirm_password
     * @return      bool
     */
    public function is_valid($confirm_email, $confirm_password)
    {
        return $this->password_valid()
            && $this->first_name_valid()
            && $this->last_name_valid()
            && $this->email_valid()
            && $this->emails_match($confirm_email)
            && $this->passwords_match($confirm_password);
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    /**
     * first_name_valid
     *
     * @return      bool
     */
    public function first_name_valid()
    {
        return $this->first_name !== "";
    }

    /**
     * last_name_valid
     *
     * @return      bool
     */
    public function last_name_valid()
    {
        return $this->last_name !== "";
    }

    /**
     * password_valid
     *
     * @return      bool
     */
    public function password_valid()
    {
        return validate_password($this->password);
    }

    /**
     * email_valid
     * @return      mixed
     */
    public function email_valid()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * email_present
     * @return      mixed
     */
    public function email_present()
    {
        return $this->email !== "";
    }

    /**
     * passwords_match
     *
     * @param       $password
     * @return      bool
     */
    public function passwords_match($password)
    {
        return $password === $this->password;
    }

    /**
     * emails_match
     *
     * @param       $email
     * @return      bool
     */
    public function emails_match($email)
    {
        return $email === $this->email;
    }
}