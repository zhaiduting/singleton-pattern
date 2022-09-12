<?php

namespace Zhaiduting\SingletonPattern;

use ArrayAccess;

abstract class AbstractRegistry extends Singleton
{
    private ArrayAccess|array $values;

    abstract protected function &createValueBox(): ArrayAccess|array;

    protected function init(): void
    {
        $this->values = &$this->createValueBox(...func_get_args());
    }

    function get($key)
    {
        return $this->values[$key] ?? null;
    }

    function set($key, $val)
    {
        $this->values[$key] = $val;
    }
}
