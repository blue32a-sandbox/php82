<?php

class User {
    public function __construct()
    {
        $this->firstName = 'hoge';
    }
}

$user = new User();
$user->lastName = 'fuga';
