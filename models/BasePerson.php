<?php
/**
 * BasePerson.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/23/17
 */

include_once "models/Model.php";

abstract class BasePerson extends Model
{
    protected $first_name;
    protected $last_name;
    protected $password;
    protected $email;
    protected $username;
    protected $role;

    public function __construct($first_name="",
                                $last_name="",
                                $password="",
                                $email="",
                                $username="",
                                $role="")
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->password = $password;
        $this->email = $email;
        $this->username = $username;
        $this->role = $role;
    }

    /**
     * @param string $first_name
     * @return BasePerson
     */
    public function set_first_name($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @param string $last_name
     * @return BasePerson
     */
    public function set_last_lame($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @param string $password
     * @return BasePerson
     */
    public function set_password($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param string $email
     * @return BasePerson
     */
    public function set_email($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $username
     * @return BasePerson
     */
    public function set_user_name($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param string $role
     * @return BasePerson
     */
    public function set_role($role)
    {
        $this->role = $role;
        return $this;
    }
}