<?php
/**
 * Hola!
 * 
 * Soy la clase Database! Soy una clase abstracta asi que no puedo
 * instanciar objetos de nungun tipo. Pero si puedo obligar a mis herederos
 * a que operen como yo digo.
 * 
 */
abstract class Database
{
    abstract public function save(array $userArray);
    abstract public function update();
    abstract public function delete();
    abstract public function read();
}