<?php
/**
 * 
 * Esta es la clase User, que determina puntualmente los datos necesarios
 * y excluyentes para tener un objeto del tipo usuario merodeando por mi 
 * sistema.
 * 
 * No es responsabilidad del mismo validar esos datos necesarios, por ende
 * necesitamos un objeto que tenga la misma. Ese objeto sale de la clase
 * Validator.
 * 
 */

class User
{
    private $email;
    private $password;

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
}