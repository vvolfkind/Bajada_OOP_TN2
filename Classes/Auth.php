<?php

class Auth
{
    public function login($user)
    {
        Session::set('email', $user['email']);
        //dd($_SESSION);
        Cookie::set('email', $user['email'], 3600);
    }

    public function validatePassword($password, $hash)
    {
        return password_verify($password, $hash);
    }
}