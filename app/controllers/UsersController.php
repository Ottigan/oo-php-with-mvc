<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController extends Users {
    public function signUp($name, $pwd) {
        $this->setUser($name, $pwd);
    }
}
