<?php
/**
 * RestrictedController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

include_once "BaseController.php";

abstract class RestrictedController implements BaseController {

    final function run($action)
    {
        if (!$this->is_valid_user() || /*session expired*/ false)
        {
            header("Location: index.php?module=login");
        }

        $action = method_exists($this, $action) ? $action : 'default_action';

        $this->$action();
    }

    abstract function is_valid_user();

}