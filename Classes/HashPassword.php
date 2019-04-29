<?php

class HashPassword
{
    static public function hash(string $password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}