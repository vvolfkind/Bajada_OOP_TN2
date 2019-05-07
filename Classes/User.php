<?php

class User
{
    private $email;
    private $password;
    private $avatar = null;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
 
    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;

    }

    public function getAvatar()
    {
        return $this->avatar;
    }


    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

    }
}