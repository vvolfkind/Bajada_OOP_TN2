<?php

class Session
{
    static public $isSessionStarted = false;

    static public function start()
    {
        if(self::$isSessionStarted !== true) {
            session_start();
            self::$isSessionStarted = true;
        }
    }
}