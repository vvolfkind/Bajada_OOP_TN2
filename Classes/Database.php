<?php

abstract class Database
{
    abstract public function save(array $userArray);
    abstract public function update();
    abstract public function delete();
    abstract public function read();

    public function saveAvatar($file, $user)
    {
        $ext = pathinfo($file["avatar"]["name"], PATHINFO_EXTENSION);
        $avatarUsuario = $user->getEmail() . "." . $ext;
        $archivo = $file["avatar"]["tmp_name"];
        $miArchivo = dirname(__DIR__) . "/imagenes/" . $avatarUsuario;
        move_uploaded_file($archivo, $miArchivo);

        return $avatarUsuario;

    }

}