<?php
namespace PHP_COMPOSER28\Models;

class Db {
    public $connection;

    public function __construct() {
        $this->connection = new \PDO("mysql:host=localhost;dbname=php27", "root", "");
    }
}



