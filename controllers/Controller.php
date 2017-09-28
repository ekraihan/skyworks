<?php
/**
 * ControllerInterfaceInterface.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/17/17
 */

include_once "controllers/BaseController.php";

abstract class Controller implements BaseController {

    final function run($action)
    {
        $this->action = $action = method_exists($this, $action) ? $action : 'default_action';

        $this->$action();
    }

//
//    private static $instance = null;
//
//    static function instance()
//    {
//        if (!empty(self::$instance))
//        {
//            return self::$instance;
//        }
//
//        $called_class = get_called_class();
//        self::$instance = new $called_class();
//
//        return self::$instance;
//    }
}