<?php

namespace Zhaiduting\SingletonPattern;

class Singleton
{
    private static array $instances = [];

    protected function init(): void
    {
    }

    final private function __construct(...$args)
    {
        static::init(...$args);
    }

    final static function instance(...$args)
    {
        $k = static::class;
        return self::inst($k, $args);
    }

    final static function instances(...$args)
    {
        $k = static::class . ' ' . serialize($args);
        return self::inst($k, $args);
    }

    private static function inst($k, $args)
    {
        if (empty(self::$instances[$k]))
            self::$instances[$k] = new static(...$args);
        return self::$instances[$k];
    }
}
