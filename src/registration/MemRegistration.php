<?php

namespace Zhaiduting\SingletonPattern\registration;

use Shmop;
use ArrayAccess;

class MemRegistration implements ArrayAccess
{
    use AbstractRegistration;

    private Shmop $shmop;
    private int $size = 1024;

    function __construct(string $char = 't')
    {
        $key = ftok(__FILE__, $char);
        $this->shmop = shmop_open($key, 'c', 0666, $this->size);
    }

    function read()
    {
        // TODO: Implement read() method.
        $str = shmop_read($this->shmop, 0, shmop_size($this->shmop));
        if (str_starts_with($str, 'a'))
            $this->values = unserialize($str);
    }

    function write()
    {
        // TODO: Implement write() method.
        $str = serialize($this->values);
        shmop_write($this->shmop, $str, 0);
    }
}
