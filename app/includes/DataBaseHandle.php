<?php

namespace App\Includes;

use PDO;

class DataBaseHandle {
    private $dsn = "mysql: host=localhost;dbname=oo_php";
    private $user = "root";
    private $pwd = "";

    protected function connect() {
        $conn = new PDO($this->dsn, $this->user, $this->pwd);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    }
}
