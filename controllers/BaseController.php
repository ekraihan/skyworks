<?php
/**
 * BaseController.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 9/19/17
 */

interface BaseController {
    public function run($action);

    public function default_action();

}
