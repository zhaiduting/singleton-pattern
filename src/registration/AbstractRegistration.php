<?php

namespace Zhaiduting\SingletonPattern\registration;

trait AbstractRegistration
{
    private array $values = [];

    abstract function read();

    abstract function write();

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->values[] = $value;
        } else {
            $this->values[$offset] = $value;
        }
        $this->write();
    }

    public function offsetExists($offset): bool
    {
        $this->read();
        return isset($this->values[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->values[$offset]);
        $this->write();
    }

    public function offsetGet($offset): mixed
    {
        $this->read();
        return $this->values[$offset] ?? null;
    }
}
