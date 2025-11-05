<?php
namespace PHP_COMPOSER28\Controllers;

use PHP_COMPOSER28\Models\User;
use PHP_COMPOSER28\Models\Db;

class UserController {
    public function __construct() {
        $user = new User();
        $user->test();

        $db = new Db();
    }
}


