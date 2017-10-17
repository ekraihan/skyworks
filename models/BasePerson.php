<?php
/**
 * BasePerson.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/23/17
 */

include_once "models/Model.php";

abstract class BasePerson extends Model
{
    protected $PersonId;
    protected $FirstName;
    protected $LastName;
    protected $Password;
    protected $Email;
    protected $UserName;
    protected $Role;

    public function __construct($FirstName="",
                                $LastName="",
                                $Password="",
                                $Email="",
                                $UserName="",
                                $Role="")
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Password = $Password;
        $this->Email = $Email;
        $this->UserName = $UserName;
        $this->Role = $Role;
    }

    /**
     * @param string $FirstName
     * @return BasePerson
     */
    public function set_FirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @param string $LastName
     * @return BasePerson
     */
    public function set_last_lame($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @param string $Password
     * @return BasePerson
     */
    public function set_Password($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @param string $Email
     * @return BasePerson
     */
    public function set_Email($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @param string $UserName
     * @return BasePerson
     */
    public function set_user_name($UserName)
    {
        $this->UserName = $UserName;
        return $this;
    }

    /**
     * @param string $Role
     * @return BasePerson
     */
    public function set_role($Role)
    {
        $this->Role = $Role;
        return $this;
    }
}