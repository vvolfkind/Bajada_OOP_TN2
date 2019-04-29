<?php

abstract class Database
{
    abstract public function save(array $userArray);
    abstract public function update();
    abstract public function delete();
    abstract public function read();
}