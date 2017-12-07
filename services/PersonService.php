<?php
/**
 * PersonService.php
 * AUTHOR: Elias Kraihanzel
 * DATE: 12/6/17
 */

class PersonService implements BaseService {

    static function get_current_person() {
        if ($_SESSION['current_person']->Role === Roles::USER)
            return UserService::get_by_id($_SESSION['current_person']->PersonId);
        else if ($_SESSION['current_person']->Role === Roles::AGENT)
            return AgentService::get_by_id($_SESSION['current_person']->PersonId);
        else if ($_SESSION['current_person']->Role === Roles::ADMIN)
            return AdminService::get_by_id($_SESSION['current_person']->PersonId);
    }

    /**
     * This method is expected to implement both update and add logic
     *
     * @param $model
     * @return mixed
     */
    static function save($model) {}

    static function get_all() {}

    static function get_by_id($id) {}

    static function delete($model) {}
}