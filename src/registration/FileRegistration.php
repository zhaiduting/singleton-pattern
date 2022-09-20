<?php

namespace Zhaiduting\SingletonPattern\registration;

use ArrayAccess;

class FileRegistration implements ArrayAccess
{
    use AbstractRegistration;

    private string $path;
    private int $last_read_time = 0;

    function __construct(string $fileName = __DIR__ . '/application_registry.txt')
    {
        $this->path = $fileName;
        $this->read();
    }

    private function read()
    {
        $mtime = $this->modified_time();
        if ($this->last_read_time < $mtime) {
            $this->values = unserialize(file_get_contents($this->path));
            $this->last_read_time = time();
        }
    }

    private function modified_time()
    {
        if (file_exists($this->path)) {
            clearstatcache();
            $mtime = filemtime($this->path);
        } else {
            $this->write();
            $this->last_read_time = $mtime = time();
        }
        return $mtime;
    }

    private function write()
    {
        file_put_contents($this->path, serialize($this->values), LOCK_EX);
    }
}
