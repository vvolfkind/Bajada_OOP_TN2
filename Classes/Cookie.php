<?php

class Cookie
{

    static public function set(
                                    string $name,
                                    string $value, 
                                    int $duration
    ): void
    {
        setcookie($name, $value, time() + $duration);
    }

    static private function jsonTransform(array $array): string
    {
        return json_encode($array);
    }
}