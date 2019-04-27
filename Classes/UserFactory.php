<?php
/**
 * 
 * Hola... Soy la clase UserFactory. No tengo mucho para contarte ya que
 * solamente me dedico a transformar objetos del tipo User en arrays con
 * un formato re especifico que despues va a ser procesado por algun otro
 * chabon que ande dando vueltas por ahi. 
 * 
 * Esto lo logro con mi unico y aburrido metodo create(), que es publico.
 * 
 * Que haces con ese array? Buena pregunta, no me importa. Capaz tenes mas
 * suerte preguntandole, de momento, a la clase Database, que creo que recibe
 * mi mensaje.
 * 
 * Besis.
 * 
 * 
 */
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