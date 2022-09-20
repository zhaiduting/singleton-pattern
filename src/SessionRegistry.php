<?php

namespace Zhaiduting\SingletonPattern;

use ArrayAccess;

class SessionRegistry extends AbstractRegistry
{
    protected function &createValueBox(string $session_key = ''): array
    {
        session_start();
        $session_key = __CLASS__ . ' ' . $session_key;
        if (!isset($_SESSION[$session_key]))
            $_SESSION[$session_key] = [];
        return $_SESSION[$session_key];
    }
}
