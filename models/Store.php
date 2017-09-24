<?php
/**
 * Store.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

abstract class Store {
    public abstract function create();

    public abstract function get_by_id();

    public abstract function search();

    /**
     * @param           $object
     * @return          mixed
     *
     * requires $object to have an id
     */
    public abstract function update($object);

    public abstract function delete($object);

}