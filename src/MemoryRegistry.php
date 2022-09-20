<?php

namespace Zhaiduting\SingletonPattern;

use ArrayAccess;
use Zhaiduting\SingletonPattern\registration\MemRegistration;

class MemoryRegistry extends AbstractRegistry
{
    protected function &createValueBox(MemRegistration $memRegistration = new MemRegistration()): ArrayAccess
    {
        return $memRegistration;
    }
}
