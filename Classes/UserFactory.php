<?php

class UserFactory
{
    public function create(User $user)
    {
        $userArray = [
            'email' => $user->getEmail(),
            'password' => HashPassword::hash($user->getPassword())
        ];

        return $userArray;
    }

}