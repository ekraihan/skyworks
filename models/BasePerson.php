<?php
/**
 * BasePerson.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/23/17
 */

include_once "models/Model.php";

abstract class BasePerson extends Model
{
    abstract protected function person_valid();

    protected $PersonId;
    protected $Role;
    protected $FirstName;
    protected $LastName;
    protected $Password;
    protected $Email;
    protected $UserName;

    public function __construct($FirstName="",
                                $LastName="",
                                $Password="",
                                $Email="",
                                $UserName="")
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Password = $Password;
        $this->Email = $Email;
        $this->UserName = $UserName;
    }

    /**
     * @param string $FirstName
     * @return BasePerson
     */
    public function set_first_name($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @param string $LastName
     * @return BasePerson
     */
    public function set_last_name($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @param string $Password
     * @return BasePerson
     */
    public function set_password($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @param string $Email
     * @return BasePerson
     */
    public function set_email($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @param string $UserName
     * @return BasePerson
     */
    public function set_username($UserName)
    {
        $this->UserName = $UserName;
        return $this;
    }



}