<?php

namespace Zhaiduting\SingletonPattern;

use ArrayAccess;

class Registry extends AbstractRegistry
{
    function &createValueBox(): ArrayAccess|array
    {
        $v=[];
        return $v;
    }
}
