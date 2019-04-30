<?php

class Auth
{
    public function login($email)
    {
        Session::set('email', $email);
        Cookie::set('email', $email, 3600);
    }

    public function validatePassword($password, $hash)
    {
        return password_verify($password, $hash);
    }

    public function logout()
    {
        if(!$_SESSION) {
            
        }
    }
}