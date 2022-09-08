<?php

namespace Zhaiduting\SingletonPattern;

use Zhaiduting\SingletonPattern\FileManage;

class ApplicationRegistry extends Registry
{
    protected $values;

    function init(FileManage $fileManage = new FileManage())
    {
        $this->values = $fileManage;
    }
}
