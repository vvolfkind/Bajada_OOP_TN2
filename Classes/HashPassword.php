<?php

/**
 * Esta es una clase mas, comun y corriente. No tiene atributos porque no los
 * necesita. No tiene constructor porque no lo necesita.
 * Solo tiene un metodo estatico (static) que se encarga de recibir un string
 * y devolver un hash.
 * 
 * No necesito instanciar objetos para hacer uso del metodo hash();
 * 
 * Para usar el mismo, la sintaxis es:
 * 
 * HashPassword::hash(<parametro/argumento>);
 * 
 * y adentro de hash() se pone lo que se quiera hashear.
 * 
 */
class HashPassword
{
    static public function hash(string $password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}