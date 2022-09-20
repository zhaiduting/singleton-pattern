<?php

namespace Zhaiduting\SingletonPattern;

use ArrayAccess;

class Registry extends AbstractRegistry
{
    function &createValueBox(): array
    {
        $v = [];
        return $v;
    }
}
