<?php

class UserFactory
{
    public function create($data)
    {
        $userArray = [
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT)
        ];

        return $userArray;
    }

}