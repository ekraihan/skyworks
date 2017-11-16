<?php
/**
 * Productt.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 10/19/17
 */

include_once "models/Model.php";

class Product extends Model {

    protected $ProductId;
    protected $Name;
    protected $Size;
    protected $Version;

    public function is_valid()
    {
        return true;
    }

    /**
     * @param mixed $Name
     * @return Product
     */
    public function set_name($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @param mixed $Size
     * @return Product
     */
    public function set_size($Size)
    {
        $this->Size = $Size;
        return $this;
    }

    /**
     * @param mixed $Version
     * @return Product
     */
    public function set_version($Version)
    {
        $this->Version = $Version;
        return $this;
    }
}