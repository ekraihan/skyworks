<?php
/**
 * Model.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/18/17
 */

abstract class Model {
    protected $id;

    public function set_id($id)
    {
        $this->id = $id;
        return $this;
    }

    public function __get($value)
    {
        if (property_exists($this, $value))
            return $this->$value;

        throw new UnexpectedValueException("Property " . $value . " does not exist in class " . get_class($this));
    }
}
