<?php

namespace Zhaiduting\SingletonPattern;

use ArrayAccess;
use Zhaiduting\SingletonPattern\registration\FileRegistration;

class ApplicationRegistry extends AbstractRegistry
{
    protected function &createValueBox(FileRegistration $fileRegistration = new FileRegistration()): ArrayAccess
    {
        return $fileRegistration;
    }
}
