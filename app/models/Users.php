<?php

namespace App\Models;

use App\Includes\DataBaseHandle;

class Users extends DataBaseHandle {
    protected function getUser($name) {
        $sql = 'SELECT * FROM test WHERE user = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetch();
        return $results;
    }

    protected function setUser($name, $pwd) {
        $sql = 'INSERT INTO test(user, password) VALUES(?,?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $pwd]);
    }
}
