<?php

namespace Zhaiduting\SingletonPattern;

class Registry extends Singleton
{
    protected array $value = [];

    function get($key)
    {
        return $this->value[$key] ?? null;
    }

    function set($key, $val)
    {
        $this->value[$key] = $val;
    }
}
