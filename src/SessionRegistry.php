<?php

namespace Zhaiduting\SingletonPattern;

class SessionRegistry extends Registry
{
    protected array $value;

    function init(string $session_key = '')
    {
        $session_key = __CLASS__ . ' ' . $session_key;
        session_start();
        if (empty($_SESSION[$session_key]))
            $_SESSION[$session_key] = [];
        $this->value =& $_SESSION[$session_key];
    }
}