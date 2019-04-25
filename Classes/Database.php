<?php
/**
 * Hola!
 * 
 * Soy la clase Database! Yo voy a armar objetos del tipo Database si me lo
 * pedis. 
 * 
 * Como me lo podes pedir?
 * 
 * Vas a cualquier archivo, me incluis con un require, y ejecutas:
 * 
 * $carrizo = new Database('carrizo.json');
 * 
 * A partir de ahi, voy a dejarte un Objeto dentro de $carrizo, y el mismo
 * va a tener tres botones, uno va a ser save(), otro va a ser getFile() y el 
 * otro va a ser setFile(). Los ultimos dos me importan un carrizo, valga la
 * redundancia, por ahora te dejo saber que con save() vas a poder grabar 
 * en un archivo json, datos de un usuario. Solamente necesito que me pases
 * un array y yo me encargo del resto. Como? como hacias en PHP estructurado, 
 * solamente que ahora el laburo lo tomo yo.
 * 
 * Bye!
 * 
 */
class Database
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function save($userArray)
    {
        $user = json_encode($userArray);
        file_put_contents($this->file, $user . PHP_EOL, FILE_APPEND);
    }

    public function getFile()
    {
        return $this->file;
    }


    public function setFile($file)
    {
        $this->file = $file;
    }
}