<?php
/**
 * User.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once __DIR__ . "/../utils/string_util.php";

class User {

    private $first_name;
    private $last_name;
    private $password;
    private $email;

    public function __construct() { }

    public function __get($property)
    {
        if (property_exists($this, $property))
            return $this->$property;

        throw new InvalidArgumentException("No Such Property ".$property);
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    /**
     * is_valid
     *
     * @return      bool
     */
    public function is_valid()
    {
        return $this->password_valid()
            && $this->first_name_valid()
            && $this->last_name_valid()
            && $this->email_valid();
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
     * full_name
     *
     * @return      string
     */
    public function full_name()
    {
        return $this->first_name.' '.$this->last_name;
    }

    /**
     * password_valid
     *
     * @return      bool
     */
    public function password_valid()
    {
        return strlen($this->password) > 6 && $this->is_alphanumeric($this->password);
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
     * user_name
     *
     * @return      string
     */
    public function user_name()
    {
        return strtolower($this->first_name).'.'.strtolower($this->last_name);
    }
}