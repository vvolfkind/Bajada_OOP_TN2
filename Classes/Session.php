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

    static public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    static public function get($key)
    {
        //$_SESSION[$key] ?? false;
        if($_SESSION[$key]) {
            return $_SESSION[$key];
        }

        return false;
    }

    static public function destroy()
    {
        if(!self::$isSessionStarted) {
            session_start();
        }
        session_destroy();
    }
}