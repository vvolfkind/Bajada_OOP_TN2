<?php

/**
 * Hola... Soy la clase UserFactory. No tengo mucho para contarte ya que
 * solamente me dedico a devolver arrays con un formato re especifico. 
 * Esto lo logro con mi unico y aburrido metodo create(), que es publico.
 * Que haces con ese array? Buena pregunta, no me importa. Capaz tenes mas
 * suerte preguntandole a la clase Database, que creo que recibe mi array.
 * 
 * Besis.
 * 
 * 
 */

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