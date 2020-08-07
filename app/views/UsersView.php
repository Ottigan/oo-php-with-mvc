<?php

namespace App\Views;

use App\Models\Users;

class UsersView extends Users {
    public function displayUser($name) {
        $user = $this->getUser($name);

        echo "<h1>Welcome, " . $user["user"] . "!</h1>";
    }
}
