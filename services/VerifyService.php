<?php
/**
 * VerifyService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/18/17
 */

class VerifyService {

    static private function person_valid($person) {
        return self::first_name_valid($person->FirstName)
            && self::last_name_valid($person->LastName)
            && self::email_valid($person->Email)
            && self::password_valid($person->Password);
    }

    static public function user_valid($user) {
        return self::person_valid($user);
    }

    static public function agent_valid($agent) {
        return self::person_valid($agent);
    }

    static public function admin_valid($admin) {
        return self::person_valid($admin)
            && self::super_admin_valid($admin->SuperAdmin);
    }

    /**
     * password_valid
     *
     * @return      bool
     */
    static public function password_valid($password)
    {
        return strlen($password) > 6;
    }

    /**
     * email_valid
     * @return      mixed
     */
    static public function email_valid($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * first_name_valid
     *
     * @return      bool
     */
    static public function first_name_valid($first_name)
    {
        return $first_name !== "";
    }

    /**
     * last_name_valid
     *
     * @return      bool
     */
    static public function last_name_valid($last_name)
    {
        return $last_name !== "";
    }

    /**
     * username_valid
     *
     * @return      bool
     */
    static public function username_valid($username) {
        return $username !== "" && AuthMapper::username_valid($username);
    }

    static public function super_admin_valid($super_admin) {
        return isset($super_admin);
    }
}