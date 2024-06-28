<?php

class UserController {
    private $user;

    public function __construct($db) {
        $this->user = new User($db);
    }

    public function createUser($name, $email, $password) {
        $this->user->name = $name;
        $this->user->email = $email;
        $this->user->password = $password;

        if ($this->user->create()) {
            echo "User was created.";
        } else {
            echo "Unable to create user.";
        }
    }
}
?>
