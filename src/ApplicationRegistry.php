<?php

namespace Zhaiduting\SingletonPattern;

use ArrayAccess;

class ApplicationRegistry extends AbstractRegistry
{
    protected function &createValueBox(FileManage $fileManage = new FileManage()): ArrayAccess|array
    {
        // TODO: Implement createValueBox() method.
        return $fileManage;
    }
}
