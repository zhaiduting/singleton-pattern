<?php

namespace Zhaiduting\SingletonPattern;

use ArrayAccess;

class ApplicationRegistry extends AbstractRegistry
{
    protected function &createValueBox(FileRegistration $fileRegistration = new FileRegistration()): ArrayAccess|array
    {
        // TODO: Implement createValueBox() method.
        return $fileRegistration;
    }
}
