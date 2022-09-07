<?php

namespace Zhaiduting\SingletonPattern;

class Registry extends Singleton
{
    protected array $values = [];

    function get($key)
    {
        return $this->values[$key] ?? null;
    }

    function set($key, $val)
    {
        $this->values[$key] = $val;
    }
}
